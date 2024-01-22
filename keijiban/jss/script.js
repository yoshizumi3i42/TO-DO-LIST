const textarea = document.querySelector('#textarea');
const N = document.getElementById("name");
const C = document.getElementById("class");
let select = document.querySelector('[name="class"]');
const btn = document.querySelector('#btn');


textarea.addEventListener('keyup', onKeyUp);//テキストエリアに何かを入力した瞬間に発動
	select.onchange = event => {
		console.log(select.selectedIndex);
	}

function onKeyUp(){
	var inputText = textarea.value; //入力された文字数をinputTextに入れる
	var Na = N.value;
	var Cl = C.value;
if (inputText.length > 0 && Na.length > 0 && Cl.length > 0) { //一文字でも入っているならボタンを押せるようにする
		btn.disabled = false;
} else {
		btn.disabled = true;
};
}
window.addEventListener('load',() => {
	loading.classList.add('loaded');
  });


  N.addEventListener('keyup', onKeyUp);//テキストエリアに何かを入力した瞬間に発動
  select.onchange = event => {
	  console.log(select.selectedIndex);
  }

function onKeyUp(){
  var inputText = textarea.value; //入力された文字数をinputTextに入れる
  var Na = N.value;
  var Cl = C.value;
if (inputText.length > 0 && Na.length > 0 && Cl.length > 0) { //一文字でも入っているならボタンを押せるようにする
	  btn.disabled = false;
} else {
	  btn.disabled = true;
};
}
window.addEventListener('load',() => {
  loading.classList.add('loaded');
});


C.addEventListener('keyup', onKeyUp);//テキストエリアに何かを入力した瞬間に発動
	select.onchange = event => {
		console.log(select.selectedIndex);
	}

function onKeyUp(){
	var inputText = textarea.value; //入力された文字数をinputTextに入れる
	var Na = N.value;
	var Cl = C.value;
if (inputText.length > 0 && Na.length > 0 && Cl.length > 0) { //一文字でも入っているならボタンを押せるようにする
		btn.disabled = false;
} else {
		btn.disabled = true;
};
}
window.addEventListener('load',() => {
	loading.classList.add('loaded');
  });

// #page-topをクリックした際の設定
$('#page-top').click(function () {
    $('body,html').animate({
        scrollTop: 0//ページトップまでスクロール
    }, 500);//ページトップスクロールの速さ。数字が大きいほど遅くなる
    return false;//リンク自体の無効化
});

