{% include 'header.php' %}

<ul>
    {% for new in news %}
    <li><a href="#">{{ new.title }}</a></li>
    {% endfor %}
</ul>

{% include 'footer.php' %}
