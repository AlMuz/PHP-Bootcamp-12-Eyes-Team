{% include 'header.php' %}

<ul>
    {% for category in categories %}
    <li>{{category.title}}</li>
    {% endfor %}
</ul>

{% include 'footer.php' %}