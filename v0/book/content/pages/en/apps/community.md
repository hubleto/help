# Community apps

Apps freely available in the Github repository.   

<div class="grid grid-cols-2 gap-2">
  {% for app in apps %}
    {% if app.url starts with 'community' %}
      <a class="btn btn-large btn-transparent" href="{{ app.url }}" >
        <span class="icon"><i class="{{ app.icon }}"></i></span>
        <span class="text"> {{ app.name }} </span>
      </a>
    {% endif %}
  {% endfor %}
</div>