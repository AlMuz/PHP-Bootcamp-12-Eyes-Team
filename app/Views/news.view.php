{% set name = 'All News' %}

{% include 'header.php' %}

<div style="border: 1px solid blue; width: 150px; display: flex; justify-content: center; margin-bottom: 10px;">
    <a href="/news/add">Add A New</a>
</div>

<ul>
    {% for new in news %}
    <li><a href="/news/{{new.news_id}}">{{ new.title }}</a> |
        <small><i>{{ new.author }} | {{ new.created_at|time_diff }}</i></small>
    </li>

    <p>{{ new.body|length > 200 ? new.body|slice(0, 200) ~ '...' : new.body }}</p>
    {% endfor %}
</ul>

{% include 'footer.php' %}
