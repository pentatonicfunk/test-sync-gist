## Description

This method is used to update an entry to a form

## Usage

```php
Forminator_API::add_quiz_entries( $quiz_id, $entry_metas );
```

## Parameters

| Name           | Type  | Description                   |
|----------------|-------|-------------------------------|
| `$quiz_id`     | int   | The ID of the quiz            |
| `$entry_metas` | array | The array of array of entries |

## Example
```php
<?php
$quiz_id = 7;
$entry_metas = array(
            array(
                'name' => 'text-1',
                'value' => 'Text Input Value',
            ),
            array(
                'name' => 'text-1',
                'value' => 'Text Input Value',
            ),
  );
Forminator_API::add_quiz_entries( $quiz_id, $entry_metas );
```