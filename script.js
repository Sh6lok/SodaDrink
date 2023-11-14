var e = 0;
var i = 0;
var f = 0;
var d = 0;
var g = 0;



viewImages({
    img : ["img/Soda can/soda_can_watermelon.png","img/Soda can/soda_can_grape.png","img/Soda can/soda_can_apple.png","img/Soda can/soda_can_banana.png"],
    main_element : ["img/main_content/watermelon3.svg","img/main_content/Berry1.svg","img/main_content/apple.svg","img/main_content/banana2.svg"],
    add_element : ["img/main_content/watermelon2.svg","img/main_content/sheet.svg","img/main_content/apple2.svg","img/main_content/banana.svg"],
    speed : 3,
  });

  function viewImages(props){
    let one = document.getElementById("one"), two = document.getElementById("two"), 
    doc2 = document.getElementById("main_bg"), text = document.getElementById("main_title"); 
    let changeSrc = props.speed * 1000 + 900
    let elems = [two, one]; one.src = props.img[0], two.src = props.img[1]; 
    
    let elems1 = [document.querySelectorAll(".main_element"), document.querySelectorAll(".main_element2")];
    elems1[1].forEach(element => {element.src = props.main_element[0];});
    elems1[0].forEach(element => {element.src = props.main_element[1];});
    
    let elems2 = [document.querySelectorAll(".additional_element"), document.querySelectorAll(".additional_element2")];
    elems2[1].forEach(element => {element.src = props.add_element[0];});
    elems2[0].forEach(element => {element.src = props.add_element[1];});
    
    function changeAddElement(){
      elems2.reverse();
      elems2[0].forEach(element => {element.style.opacity = 1;});
      elems2[1].forEach(element => {element.style.opacity = 0;});
      setTimeout(() => {elems2[1].forEach(element => {element.src = props.add_element[g];});}, changeSrc);
      g == props.add_element.length - 1 ? g = 0 : g++;
      setTimeout(changeAddElement, 3000);
    }
    
    function changeMainElement(){
      elems1.reverse();
      elems1[0].forEach(element => {element.style.opacity = 1;});
      elems1[1].forEach(element => {element.style.opacity = 0;});
      setTimeout(() => {elems1[1].forEach(element => {element.src = props.main_element[i];});}, changeSrc);
      d == props.main_element.length - 1 ? d = 0 : d++;
      setTimeout(changeMainElement, 3000);
    }

    function changeImg(){
        elems.reverse();
        elems[0].style.opacity = 1, elems[1].style.opacity = 0;
        setTimeout(()=> elems[1].src = props.img[i], changeSrc);
        i == props.img.length - 1 ? i = 0 : i++;
        timeout = setTimeout(changeImg, 3000);
    }
    function changeBG (){
        var color = ["#fd3f50", "#724C8B", "#AACE33", "#FFE135"];
        doc2.style.backgroundColor = color[e];
        e = (e + 1) % color.length;
        setTimeout(changeBG, 3000);
    };
    function changeText(){
        var title = ["SWEET WATERMELON","JUICY GRAPES", "SOUR APPLE", "RIPE BANANA"];
        title[e] == "JUICY GRAPES" ? text.style.fontSize = 'calc(136 * 100vw / 1920)': text.style.fontSize = 'calc(200 * 100vw / 1920)';
        
        text.textContent = title[f];
        f = (f + 1) % title.length;
        setTimeout(changeText, 3000);
    }


    changeImg();
    changeBG();
    changeText();
    changeMainElement();
    changeAddElement();
  }
;
