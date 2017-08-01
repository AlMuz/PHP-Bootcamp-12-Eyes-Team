{% set name = 'Home' %}
{% include 'header.php' %}



{{name}}
<ul>
    {% for new in news %}
    <li><a href="news/{{new.news_id}}">{{ new.title }}</a> | <small>{{ new.author }} | {{ new.created_at }}</small></li>
    {% endfor %}
</ul>



{% include 'footer.php' %}
