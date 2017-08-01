{% include 'header.php' %}

<ul>
    {% for new in news %}
    <li><a href="news/{{new.news_id}}">{{ new.title }}</a></li>
    {% endfor %}
</ul>

{% include 'footer.php' %}
