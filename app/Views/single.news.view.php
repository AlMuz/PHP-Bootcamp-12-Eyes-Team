{% set name = "" %}
{% for new in news %}

    {% set name = new.title %}

{% endfor %}

{% include 'header.php' %}

{% for new in news %}

<small>Created by: {{ new.author }} / {{ new.created_at }}</small>
<p>{{ new.body }}</p>
{% endfor %}

{% include 'footer.php' %}
