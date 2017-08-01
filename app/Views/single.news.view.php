{% include 'header.php' %}

{% for new in news %}
<h1>{{ new.title }}</h1>
<small><i>Created by: {{ new.author }} / {{ new.created_at|time_diff }}</i></small>
<p>{{ new.body }}</p>
{% endfor %}

{% include 'footer.php' %}
