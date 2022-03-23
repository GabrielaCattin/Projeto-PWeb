const c = (el) => document.querySelector(el);
const cs = (el) => document.querySelectorAll(el);

modelsJson.map((item, index)=>{
    let modelsItem = c('.models .models-item').cloneNode(true);
    modelsItem.querySelector('.models-item--img img').src = item.img; 
    modelsItem.querySelector('.models-item--price').innerHTML = `R$ ${item.price[0].toFixed(2)}`;
    modelsItem.querySelector('.models-item--name').innerHTML = item.name;
    modelsItem.querySelector('.models-item--desc').innerHTML = item.description;
    c('.models-area').append(modelsItem);
});