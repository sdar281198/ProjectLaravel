window.addEventListener('DOMContentLoaded', ()=> {
    let tabs = document.querySelectorAll('.tab');
    let content = document.querySelectorAll('.content');
    let prev = document.querySelector('.previous');
    let next = document.querySelector('.next');
    let firstTab = function(tabs) {tabs.classList.add('tab-active')};
    let firstContent = function(content) {content.classList.add('content-active')};

    let activeTab = 0;
  
    firstTab(tabs[0]);
    firstContent(content[0]);
        
        for (let i = 0; i < tabs.length; i++) {            
            tabs[i].addEventListener('click', () => tabClick(i));
        }

        prev.addEventListener('click', () => tabClick(activeTab - 1));
        next.addEventListener('click', () => tabClick(activeTab + 1));

        
        function tabClick(currentTab) {
          removeActive();
            //Add Active Class
            tabs[currentTab].classList.add('tab-active');
            content[currentTab].classList.add('content-active');
            activeTab = currentTab
        }  
        function removeActive() {
          for (let i = 0; i < tabs.length; i++) {
            //Remove Active Class
            content[i].classList.remove('content-active');
            content[i].classList.add('content-show');
            setTimeout(function() {
              content[i].classList.remove('content-show');
            },1500);
            tabs[i].classList.remove('tab-active');
          }
         }
       })
       prev.addEventListener("click", (i) => {
        if (activeTab === 0) {
          activeTab = tabs.length - 1;
          tabClick(activeTab);
        } else {
          tabClick(activeTab - 1);
        }
      });
      next.addEventListener("click", (i) => {
        if (activeTab >= tabs.length - 1) {
          activeTab = 0;
          tabClick(activeTab);
        } else {
          tabClick(activeTab + 1);
        }
      });