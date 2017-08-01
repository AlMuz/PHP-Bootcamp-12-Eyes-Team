{% include 'header.php' %}

<div class="row">

    <div class="col-md-8">
        <h1>Our Latest News</h1>

        <ul>
            {% for new in news %}
            <li><a href="news/{{new.news_id}}">{{ new.title }}</a> | <small><i>{{ new.author }} | {{ new.created_at }}</i></small></li>

            <p>{{ new.body|length > 200 ? new.body|slice(0, 200) ~ '...' : new.body  }}</p>
            {% endfor %}
        </ul>
    </div>

    <div class="col-md-4">
        <h1>Category</h1>
        <ul>
            {% for category in categories %}
            <li><a href="category/{{category.category_id}}">{{category.title}}</a> </li>

            {% endfor %}
        </ul>
    </div>

</div>


{% include 'footer.php' %}
