{% include 'header.php' %}

<ul>
    {% for new in news %}
    <li><a href="news/{{new.news_id}}">{{ new.title }}</a> | <small>{{ new.author }} | {{ new.created_at }}</small></li>
    {% endfor %}
</ul>

<h1>Category</h1>
<ul>
{% for category in categories %}
    <li><a href="category/{{category.category_id}}">{{category.title}}</a> </li>

{% endfor %}
</ul>


{% include 'footer.php' %}
