const slides = document.querySelector('.slides'); //전체 슬라이드 컨테이너
const slideImg = document.querySelectorAll('.slides li'); //모든 슬라이드들
let currentIdx = 0; //현재 슬라이드 index
const slideCount = slideImg.length; // 슬라이드 개수
const prev = document.querySelector('.prev'); //이전 버튼
const next = document.querySelector('.next'); //다음 버튼
const slideWidth = 300; //한개의 슬라이드 넓이
const slideMargin = 100; //슬라이드간의 margin 값

//전체 슬라이드 컨테이너 넓이 설정
slides.style.width = (slideWidth + slideMargin) * slideCount + 'px';

function moveSlide(num) {
  slides.style.left = -num * 400 + 'px';
  currentIdx = num;
}

prev.addEventListener('click', function () {
  /*첫 번째 슬라이드로 표시 됐을때는 
  이전 버튼 눌러도 아무런 반응 없게 하기 위해 
  currentIdx !==0일때만 moveSlide 함수 불러옴 */

  if (currentIdx !== 0) moveSlide(currentIdx - 1);
});

next.addEventListener('click', function () {
  /* 마지막 슬라이드로 표시 됐을때는 
  다음 버튼 눌러도 아무런 반응 없게 하기 위해
  currentIdx !==slideCount - 1 일때만 
  moveSlide 함수 불러옴 */
  if (currentIdx !== slideCount - 1) {
    moveSlide(currentIdx + 1);
  }
});

// // Fetch the menu data from menu.json
// fetch('menu.json')
//   .then(response => response.json())
//   .then(data => {
//     const todayItems = data.data.filter(item => item.today);
//     const todayItemsContainer = document.getElementById('todayItems');

//     let currentItemIndex = 0;

//     function showItem(index) {
//       const item = todayItems[index];
//       const itemDiv = document.createElement('div');
    
//       itemDiv.innerHTML = `
//         <img src="${item.img}" alt="${item.name}">
//         <p>${item.name}</p>
//         <p>Price: $${item.price}</p>
//       `;
    
//       todayItemsContainer.appendChild(itemDiv); // Append the new item instead of replacing
//     }

//     function startSlideshow() {
//       showItem(currentItemIndex);
//       currentItemIndex = (currentItemIndex + 1) % todayItems.length;
//       setTimeout(startSlideshow, 3000); // Change 3000 to adjust slide interval
//     }

//     todayItemsContainer.addEventListener('mouseenter', () => {
//       clearTimeout(slideshowTimeout);
//     });

//     todayItemsContainer.addEventListener('mouseleave', () => {
//       startSlideshow();
//     });

//     let slideshowTimeout = setTimeout(startSlideshow, 3000); // Start slideshow initially
//   })
//   .catch(error => console.error('Error fetching menu data:', error));


