{% include 'header.php' %}

<ul>
    {% for category in categories %}
    <li><a href="category/{{category.category_id}}">{{ category.title }}</a></li>
    {% endfor %}
</ul>

{% include 'footer.php' %}
