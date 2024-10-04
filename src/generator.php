<?php

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;
use Nette\PhpGenerator\PsrPrinter;

require __DIR__ . '/../vendor/autoload.php';

$json = file_get_contents('https://raw.githubusercontent.com/PaulSonOfLars/telegram-bot-api-spec/refs/heads/main/api.json');

$decoded = json_decode($json, true);
$types = $decoded['types'];


exec('rm ' . __DIR__ . '/TelegramType/*');

foreach ($types as $className => $classInfo) {
    printClass(generateClass($className, $classInfo));
}

$readme = file_get_contents('README._md');

file_put_contents('README.md', strtr($readme, [
    '{{API_VERSION}}' => $decoded['version'],
    '{{API_RELEASE_DATE}}' => $decoded['release_date'],
]));

function generateClass($className, $classInfo): ClassType
{

    $class = new ClassType($className);

    $class->addComment(implode(' ', $classInfo["description"]));

    if (!empty($classInfo['subtypes'])) {
        $class->setAbstract();

        return $class;
    }

    $fields = $classInfo['fields'] ?? [];

    $constructor = $class->addMethod('__construct');

    $fields = requiredAlwaysGoLast($fields);

    foreach ($fields as $field) {

        $parameter = $constructor->addPromotedParameter(snakeToCamel($field["name"]));

        $normalized_types = array_map(normalizeType(...), $field['types']);
        $parameter->setType(type: implode('|', $normalized_types));

        if (!$field['required']) {
            $parameter->setNullable(true);
            $parameter->setDefaultValue(null);
        }
    }

    $subTypeOf = $classInfo['subtype_of'][0] ?? null;
    $class->setExtends($subTypeOf);

    return $class;
}

function printClass(ClassType $class): void
{
    $file = new Nette\PhpGenerator\PhpFile;
    $file->addComment('This file is auto-generated.');
    $file->setStrictTypes();

    $printer = new PsrPrinter();

    $wholeThing = $printer->printFile($file) . $printer->printNamespace(new PhpNamespace('Yivoff\TelegramType')) . $printer->printClass($class);

    file_put_contents(__DIR__ . '/TelegramType/' . $class->getName() . '.php', $wholeThing);

}

function snakeToCamel($string, $capitalizeFirstCharacter = false): string
{

    $str = str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));

    if (!$capitalizeFirstCharacter) {
        $str[0] = strtolower($str[0]);
    }

    return $str;
}

function normalizeType(string $type): string
{
    if (str_starts_with($type, 'Array of')) {
        return "array";
    }

    $supportedTypes = [
        'Integer' => 'int',
        'Float' => 'float',
        'String' => 'string',
        'Boolean' => 'bool',
    ];
    return $supportedTypes[$type] ?? $type;
}

function requiredAlwaysGoLast(array $fields): array
{
    $required = [];
    $nonRequired = [];

    foreach ($fields as $field) {
        if ($field['required']) {
            $required[] = $field;
        } else {
            $nonRequired[] = $field;
        }
    }

    return array_merge($required, $nonRequired);
}
