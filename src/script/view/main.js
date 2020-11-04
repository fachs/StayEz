import DataSource from '../data/data-source.js';

const main = () => {
    const searchElement = document.querySelector("#searchElement");
    const buttonSearchElement = document.querySelector("#searchButtonElement");
    const hotelListElement = document.querySelector("#hotelList");
    
    const onButtonSearchClicked = () => {
        DataSource.searchHotel(searchElement.value)
            .then(renderResult)
            .catch(fallbackResult)
    };

    // Async Await

    // const onButtonSearchClicked = async () => {
    //     try {
    //         const result = await DataSource.searchHotel(searchElement.value);
    //         renderResult(result);
    //     } catch (message) {
    //         fallbackResult(message)
    //     }
    // };
    
    const renderResult = results => {
        hotelListElement.innerHTML = "";
        results.forEach(hotel => {
            const {name, hotelLocation, hotelImage, accoType, facility1, facility2, facility3, facility4, rate} = hotel;

            const hotelElement = document.createElement("div");
            hotelElement.setAttribute("class", "hotel");

            hotelElement.innerHTML = `
                <style>
                .container-product{
                    width:70%;
                    padding-right:15px;
                    padding-left:15px;
                    margin-right:auto;
                    margin-left:auto
                 }
                 @media (min-width:576px)
                 {
                   .container-product{
                     max-width:540px
                   }
                 }
                 @media (min-width:768px)
                 {
                   .container-product{
                     max-width:720px
                   }
                 }
                 @media (min-width:992px)
                 {
                   .container-product{
                     max-width:960px
                   }
                 }
                 @media (min-width:1200px){
                   .container-product{
                     max-width:1140px
                   }
                 }
                 .pxlg5{
                   padding-right:3rem!important;
                   padding-left:3rem!important;
                   padding-bottom: 20px;
                 }
                 .py3{
                   padding-bottom: 1rem !important;
                   padding-top: 1rem !important;
                 }
                 .c0l {
                   -ms-flex-preferred-size: 0;
                   flex-basis: 0;
                   -ms-flex-positive: 1;
                   flex-grow: 1;
                   max-width: 100%;
                   position: relative;
                   width: 100%;
                   padding-right: 15px;
                   padding-left: 15px;
                 }
                 .b0rder {
                   border: 1px solid #dee2e6 !important;
                 }
                 .bglight {
                   background-color: #f8f9fa !important;
                 }
                 .mxlgn5{
                   margin-right:-3rem!important
                 }
                 .mxlgn5{
                   margin-left:-3rem!important
                 }
                 .hotel-img {
                   width: 40%;
                   height: 210px;
                 }
                 .quick-info {
                   -webkit-align-items: flex-start;
                   align-items: flex-start;
                   display: -webkit-inline-flex;
                   display: inline-flex;
                   -webkit-flex-wrap: wrap;
                   flex-wrap: wrap;
                   min-height: 22px;
                   line-height: 1;
                   margin-bottom: 4px;
                   padding-top: 1px;
                   width: 100%;
                 }
                 .accommodation-type {
                   padding-right: 15px;
                 }
                 .location {
                     display: block;
                 }
                 .location .item-link{
                   display: -webkit-flex;
                   display: flex;
                   -webkit-align-items: center;
                   align-items: center;
                   padding: 8px;
                 }
                 .item .item-link {
                     color: #37454d;
                     cursor: pointer;
                     position: relative;
                  }
                 .location .location-ic {
                   display: inline-block;
                   width: 30px;
                   height: 30px;
                   margin-right: 8px;
                   -webkit-flex: 0 0 30px;
                   flex: 0 0 30px;
                 }
                 article {
                   display: -webkit-flex;
                   display: flex;
                   position: relative; 
                   width: 100%;
                 }
                 .item__name {
               margin-bottom: 4px;
                 }
                 .item__name {
                     display: inline-block;
                     line-height: 1.25;
                     width: 100%;
                     margin-left: 20px;
                 }
                 .book-button {
                   float: right;
                   height: 50px;
                   width: 200px;
                   background-color:#007bff;
                   color: white;
                   border-radius: 7px;
                 }
                 .right-side-section li{
                   
                   list-style-type: none;
                 }
                 .book-button {
                 margin-bottom: 20px;
                 }
                 .card-deck, #Popular {
                     display: none;
                 }
                </style>
                <div class="container-product pxlg5">
            <div class="mxlgn5">
              <div class="c0l py3 pxlg5 b0rder bglight">
                <article>     
                    <img class="hotel-img" src="${hotelImage}" alt="">
                    <div class="item__name item__name--link">
                      <h5>${name}</h5>
                      <div class="quick-info">
                        <div class="stars-wrp" itemprop="starRating" itemtype="https://schema.org/Rating" itemscope="true">
                          <meta itemprop="ratingValue" content="4">
                          <span class="icon-ic star">
                            <svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12">
                              <path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path>
                            </svg>
                          </span>
                          <span class="icon-ic star">
                            <svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12">
                              <path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path>
                            </svg>
                          </span>
                          <span class="icon-ic star">
                            <svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12">
                              <path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path>
                            </svg>
                          </span>
                          <span class="icon-ic star">
                            <svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12">
                              <path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path>
                            </svg>
                          </span>
                        </div>
                        <p class="accommodation-type">${accoType}</p>
                      </div>
                      <div class="location ov-hidden">
                        <div class="item-link">
                          <span class="icon-ic location-ic icon-center">
                            <svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="24" height="24" viewBox="0 0 24 24">
                              <g class="svg-color--primary" fill="#37454d" fill-rule="evenodd">
                                <path d="M12 5C9.8 5 8 6.8 8 9s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4zm0 7c-1.6 0-3-1.4-3-3s1.4-3 3-3 3 1.4 3 3-1.4 3-3 3z"></path>
                                <path d="M18 8.2C17.6 5.3 15 3 12 3S6.4 5.3 6 8.2V9c0 .7.1 1.4.4 2.1l4.8 9.4c.2.3.5.5.9.5s.7-.2.9-.5l4.8-9.4c.1-.7.2-1.4.2-2.1v-.8zm-1.3 2.5L12 20l-4.7-9.3C7.1 10.2 7 9.6 7 9v-.6C7.4 5.9 9.5 4 12 4s4.6 1.9 5 4.4V9c0 .6-.1 1.2-.3 1.7z"></path>
                              </g>
                            </svg>
                          </span>
                          <p class="details-paragraph details-paragraph--location location-details">${hotelLocation}</p>
                        </div>
                      </div>
                      <div class="facility-info">
                        <ul class="facility-list">
                          <li class="fa-li"><span>${facility1}</span></li>
                          <li class="fa-li"><span>${facility2}</span></li>
                          <li class="fa-li"><span>${facility3}</span></li>
                          <li class="fa-li"><span>${facility4}</span></li>
                        </ul>
                      </div>
                    </div>
                    <ul class="right-side-section">
                      <li>
                        <button class="book-button">
                          <label for="">Book</label>
                        </button>
                      </li>
                      <li>
                        <div class="rate-info">
                          <span>IDR ${rate} / night</span>
                        </div>
                      </li>
                    </ul>
                    
                </article>
              </div>
            </div>
          </div>`;
                hotelListElement.appendChild(hotelElement);
        })
    };

    const fallbackResult = message => {
        hotelListElement.innerHTML = "";
        hotelListElement.innerHTML += `<h2 class="placeholder">${message}</h2>`;
    }

    buttonSearchElement.addEventListener("click", onButtonSearchClicked);
};

export default main;