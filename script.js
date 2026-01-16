const jsonSource='data.json';
fetch(jsonSource)
.then(response => response.json())
.then(data =>{
console.log(data);
document.getElementById('data-container').innerHTML="Name:"+ ${data.name}+", Age:"+ ${data.age};
})
.catch(error =>{
console.error('Error fetching:',error);

});

