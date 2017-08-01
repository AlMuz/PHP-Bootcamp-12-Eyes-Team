{% include 'header.php' %}

<ul>
    {% for new in news %}
    <li><a href="news/{{new.news_id}}">{{ new.title }}</a> | <small>{{ new.author }} | {{ new.created_at }}</small></li>

    <p>{{ new.body|length > 50 ? new.body|slice(0, 200) ~ '...' : new.body  }}</p>
    {% endfor %}
</ul>

{% include 'footer.php' %}
