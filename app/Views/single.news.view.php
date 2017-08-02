{% set name = "" %}
{% for new in news %}

{% set name = new.title %}

{% endfor %}

{% include 'header.php' %}

{% for new in news %}

<small>Created by: {{ new.author }} / {{ new.created_at }}</small>
<p>{{ new.body }}</p>
{% endfor %}

<hr/>

<h3>Add A Comment</h3>
<form action="" method="post">
    <div style="display: flex; flex-direction: column">
        <label for="username">Your Name</label>
        <input id="username" name="username">

        <label for="comment">Your Comment</label>
        <textarea name="comment" id="comment" cols="30" rows="5"></textarea>

        <input type="submit" value="Submit">
    </div>
</form>

<hr/>

<h3>Comments</h3>
{% for comment in comments %}
<p>{{ comment.body }}</p>
<small>Submitted by: {{ comment.author }} / {{ comment.created_at }}</small>
{% endfor %}


{% include 'footer.php' %}
