{% include 'header.php' %}

{% for new in news %}
<h1>{{ new.title }}</h1>
<small>Created by: {{ new.author }} / {{ new.created_at }}</small>
<p>{{ new.body }}</p>
{% endfor %}

{% include 'footer.php' %}
