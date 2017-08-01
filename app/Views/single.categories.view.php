{% set name = 'Single category page' %}
{% include 'header.php' %}
<hr>
<ul>
    {% for new in news %}
    <h1>{{ new.title }}</h1>
    <small>Created by: {{ new.author }} / {{ new.created_at }}</small>
    <p>{{ new.body }}</p>
    <hr>
    {% endfor %}
</ul>

{% include 'footer.php' %}