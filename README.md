# Peope Module

People module for PyroCMS 3 with support for dynamic fields and assignments.

## Overwriting the default view
### The prefered / project specific way
1. `php artisan addon:publish people`
2. Edit the `view` view in `resources/<site name>/addons/wirelab/people-module/views/people`

### In a custom theme
In your theme's service provider add the following:
```php
protected $overrides = [
    'wirelab.module.people::person/view' => 'your view path here',
];
```

## Adding fields to people
1. In the people module go to `fields` and make a new field
2. In the `people` section click on `assignments` and assign the field

## Adding people to a page
1. Create a _multiple_ field in the pages module, assign it to People > People
2. Assign the field to a page type
3. In the page type loop over `page.your_slug` and call `render()` on a person. Or call `render()` on `page.your_slug` to have it to loop for you.
Examples:
```twig
page.your_slug.render()
```
```twig
{% for person in page.your_slug %}
	person.render()
{% endfor %}
```
Not calling render will return the attributes of the person.
```twig
{% for person in page.your_slug %}
	{{ person.name }}
	{{ person.email }}
{% endfor %}
```