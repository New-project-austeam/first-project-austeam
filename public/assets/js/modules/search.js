function search (){


  const searchBtn = document.querySelector('#search-btn');
  const searchText =document.querySelector('#search');
  const searchResults = document.querySelector('.search-results');


  searchBtn.addEventListener('click',function(){
    let template =
    `<d class="search-results">
    <p>${searchText.value}の検索結果が見つかりました</p>
  </d>`;
  searchResults.innerHTML = template;
  }
  );



}
module.exports = search;
