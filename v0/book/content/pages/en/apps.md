# Apps

Explore each app in detail, breaking down their features and how they contribute to making your business operations more efficient

There are following types of apps in Hubleto:

| App type      | Description / When to use                                                                            |
| ------------- | ---------------------------------------------------------------------------------------------------- |
| **Community** | Apps freely available in the Github repository.                                                      |
| **Premium**   | Hubleto team develops premium apps as the paid and more complex version of community apps.           |
| **Custom**    | Use custom apps if you are developing a custom project and do not plan to re-use your app elsewhere. |
| **External**  | External apps are developed by external companies and are planned to be re-used in many projects.    |
Table: Types of Hubleto apps

In this guide, only *Community* and *Premium* apps are documented.

## Find app

<div class="card p-2">
  <a class="btn btn-transparent btn-blue" href="#"><span class="text">All apps</span></a>
  <a class="btn btn-transparent btn-blue" href="apps/community"><span class="text">Community apps</span></a>
  <a class="btn btn-transparent btn-blue" href="apps/premium"><span class="text">Premium apps</span></a>
</div>

<div class="grid grid-cols-2 gap-2 mt-4">
  {% for app in apps %}
    <a class="btn btn-large btn-transparent" href="apps/{{ app.url }}" >
      <span class="icon"><i class="{{ app.icon }}"></i></span>
      <span class="text"> {{ app.name }} </span>
    </a>
  {% endfor %}
</div>
