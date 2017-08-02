{% set name = "" %}
{% set id = "" %}
{% for new in news %}
{% set name = new.title %}
{% set id = new.news_id %}
{% endfor %}

{% include 'header.php' %}

{% for new in news %}
<small>Created by: {{ new.author }} / {{ new.created_at|time_diff }}</small></br>

{% if new.url|length > 0 %}
<img src="{{ new.url }}" style="height: 50%; width: 50%"/>
{% endif %}

<p>{{ new.body }}</p>
{% endfor %}
<hr/>

<h3>Add A Comment</h3>
<form action="/news/{{id}}/new-comment" method="POST">
    <div style="display: flex; flex-direction: column">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="author" required>

        <label for="comment">Your Comment</label>
        <textarea name="comment" id="comment" cols="30" rows="5" required></textarea>

        <input type="hidden" name="news_id" value="{{id}}">

        <input type="submit" value="Submit">
    </div>
</form>


<hr/>

<h3>Comments</h3>
{% for comment in comments %}
<div style="border: 1px solid black; border-left: 0; border-right: 0; border-bottom: 0; margin-bottom: 10px;">
    <p>{{ comment.body }}</p>
    <small><em>Submitted by: {{ comment.author }} / {{ comment.created_at|time_diff }}</em></small>
</div>
{% endfor %}


{% include 'footer.php' %}
