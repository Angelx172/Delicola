let data = [{"name":"All"},{"name":"NodeJS"},{"name":"ReactJS"},{"name":"PHP"},{"name":"Wordpress"},{"name":"Joomla"}];

let values = data.map(function(entry) {
  return entry.name;
});

console.log(values);