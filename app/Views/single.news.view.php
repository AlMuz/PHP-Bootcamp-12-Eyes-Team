{% include 'header.php' %}

{% for new in news %}
<p>{{ new }}</p>
{% endfor %}

{% include 'footer.php' %}
