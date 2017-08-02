{% set name = 'Categories' %}
{% include 'header.php' %}

<a href="/categories/add">Add A Category</a>

<ul>
    {% for category in categories %}
    <li><a href="categories/{{category.category_id}}">{{ category.title }}</a></li>
    {% endfor %}
</ul>

{% include 'footer.php' %}
