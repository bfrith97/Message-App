//MODALsend

let currentUser = "";

const modalBkgrnd = document.querySelector(".modal-background");
const lgnModal = document.querySelector(".login-modal");
const buttons = document.querySelectorAll(".login-button");
const chat = document.querySelectorAll(".chat-selector");
const chatFirst = document.querySelector(".chat-selector:first-child");
const chatActive = document.querySelector(".chatbar-active");
const chatWindowActive = document.querySelector(".chat-window-active");
const chatSlctrs = document.querySelector(".chats-selectors");

const initialise = function (user) {
  currentUser = user;
  modalBkgrnd.style.display = "none";
  lgnModal.style.display = "none";

  ctnrUserRight.style.display = "grid";
  ctnrUserLeft.style.display = "flex";

  chatFirst.classList.add("chatbar-active");
  msgTop.style.display = "initial";
  msgContainer.style.display = "flex";
  chatSlctrs.style.display = "flex";

  msgContent.style.display = "initial";

  btnSend.style.display = "initial";
};

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    if (button.classList.contains("login-button-one")) {
      initialise(1);
    }
    if (button.classList.contains("login-button-two")) {
      initialise(2);
    }
  });
});

// CHAT

const msgCreate = document.createElement("div");
// const msgTop = document.querySelector(".message-top");
const msg = document.querySelectorAll(".message");
const msgContainer = document.querySelector(".message-write");
const msgContent = document.querySelector(".message-content");
const chatWindow = document.querySelectorAll(".chat-window");
const btnSend = document.querySelector(".message-send");
const clearChat = document.querySelector(".btn-clearchat");
const window1 = document.querySelector('.chat-window1');
const window2 = document.querySelector('.chat-window2');
const window3 = document.querySelector('.chat-window3');
const window4 = document.querySelector('.chat-window4');
const members1 = document.querySelector('.members1')
const members2 = document.querySelector('.members2')
const members3 = document.querySelector('.members3')
const members4 = document.querySelector('.members4')
const form1 = document.querySelector('.form1')
const form2 = document.querySelector('.form2')
const form3 = document.querySelector('.form3')
const form4 = document.querySelector('.form4')
const chatSelector1 = document.querySelector('.chat-selector1')
const chatSelector2 = document.querySelector('.chat-selector2')
const chatSelector3 = document.querySelector('.chat-selector3')
const chatSelector4 = document.querySelector('.chat-selector4')

console.log(localStorage.getItem('activeChat'));

function checkSubmit(e) {
  if(e && e.keyCode == 13) {
     document.forms[0].submit();
  }
}

chat.forEach((msgTop) => {
  msgTop.addEventListener("click", () => {
    if (!msgTop.classList.contains("chatbar-active")) {
      chat.forEach((element) => {
        element.classList.remove("chatbar-active");
      });
      msgTop.classList.add("chatbar-active");
      
    }


  });
});

const activeChatNum = localStorage.getItem('activeChat');

chat.forEach((singleChat) => {
  singleChat.addEventListener('click', () => {
 
  })
})

switch (activeChatNum) {
  case '1':
    console.log('one')
    window1.classList.add('chat-window-active')
    window2.classList.remove('chat-window-active')
    window3.classList.remove('chat-window-active')
    window4.classList.remove('chat-window-active')
    members1.classList.add('members-active')
    members2.classList.remove('members-active')
    members3.classList.remove('members-active')
    members4.classList.remove('members-active')
    form1.classList.add('form-active')
    form2.classList.remove('form-active')
    form3.classList.remove('form-active')
    form4.classList.remove('form-active')
    chatSelector1.classList.add('chat-selector-active')
    chatSelector2.classList.remove('chat-selector-active')
    chatSelector3.classList.remove('chat-selector-active')
    chatSelector4.classList.remove('chat-selector-active')

    break;

  case '2':
    console.log('two')
    window1.classList.remove('chat-window-active')
    window2.classList.add('chat-window-active')
    window3.classList.remove('chat-window-active')
    window4.classList.remove('chat-window-active')
    members1.classList.remove('members-active')
    members2.classList.add('members-active')
    members3.classList.remove('members-active')
    members4.classList.remove('members-active')
    form1.classList.remove('form-active')
    form2.classList.add('form-active')
    form3.classList.remove('form-active')
    form4.classList.remove('form-active')
    chatSelector1.classList.remove('chat-selector-active')
    chatSelector2.classList.add('chat-selector-active')
    chatSelector3.classList.remove('chat-selector-active')
    chatSelector4.classList.remove('chat-selector-active')
    break;

  case '3':
    console.log('three')
    window1.classList.remove('chat-window-active')
    window2.classList.remove('chat-window-active')
    window3.classList.add('chat-window-active')
    window4.classList.remove('chat-window-active')
    members1.classList.remove('members-active')
    members2.classList.remove('members-active')
    members3.classList.add('members-active')
    members4.classList.remove('members-active')
    form1.classList.remove('form-active')
    form2.classList.remove('form-active')
    form3.classList.add('form-active')
    form4.classList.remove('form-active')
    chatSelector1.classList.remove('chat-selector-active')
    chatSelector2.classList.remove('chat-selector-active')
    chatSelector3.classList.add('chat-selector-active')
    chatSelector4.classList.remove('chat-selector-active')
    break;

  case '4':
    console.log('four')
    window1.classList.remove('chat-window-active')
    window2.classList.remove('chat-window-active')
    window3.classList.remove('chat-window-active')
    window4.classList.add('chat-window-active')
    members1.classList.remove('members-active')
    members2.classList.remove('members-active')
    members3.classList.remove('members-active')
    members4.classList.add('members-active')
    form1.classList.remove('form-active')
    form2.classList.remove('form-active')
    form3.classList.remove('form-active')
    form4.classList.add('form-active')
    chatSelector1.classList.remove('chat-selector-active')
    chatSelector2.classList.remove('chat-selector-active')
    chatSelector3.classList.remove('chat-selector-active')
    chatSelector4.classList.add('chat-selector-active')
    break;
  default:
    console.log('default')
    break;
}

// USERS

const signOutBtn = document.querySelector(".btn-signout");
// const ctnrUser = document.querySelectorAll(".container-user");
const ctnrUserRight = document.querySelector(".container-user-right");
const ctnrUserLeft = document.querySelector(".container-user-left");
const userImg = document.querySelector(".user-image");
const editUserBtn = document.querySelector('.btn-editinfo');
const userModal = document.querySelector('.user-modal');
const userModalCloseBtn = document.querySelector('.user-window-close');
const containerLeft = document.querySelector('.container-user-left');

let userModalHidden = 0;
editUserBtn.addEventListener('click', () => {
  if (userModalHidden == 0) {
    userModal.style.display = 'initial'
    setTimeout(() => {
      userModal.style.opacity = '100%';
      userModalHidden = 1
    }, 10);

  } else if (userModalHidden == 1) {
    userModal.style.opacity = '0%';
    userModalHidden = 0
    setTimeout(() => {
      userModal.style.display = 'none'
    }, 250);
  }
})

userModalCloseBtn.addEventListener('click', () => {
  if (userModalHidden == 0) {
    userModal.style.display = 'initial'
    setTimeout(() => {
      userModal.style.opacity = '100%';
      userModalHidden = 1
    }, 10);

  } else if (userModalHidden == 1) {
    userModal.style.opacity = '0%';
    userModalHidden = 0
    setTimeout(() => {
      userModal.style.display = 'none'
    }, 250);
  }
})

containerLeft.addEventListener('mouseover', () => {
  containerLeft.style.transform = 'translateX(0%)';
})

containerLeft.addEventListener('mouseleave', () => {
  setTimeout(() => {
    containerLeft.style.transform = 'translateX(80%)';
  }, 300);
})

// SIGN OUT

signOutBtn.addEventListener("click", () => {
  console.log('hello');
  modalBkgrnd.style.display = "block";
  lgnModal.style.display = "block";
  chatFirst.classList.remove("chatbar-active");
  chat.forEach((chat) => {
    if (chat.classList.contains("chatbar-active")) {
      chat.classList.remove("chatbar-active");
    }
  });
  msgTop.style.display = "none";
  msgContainer.style.display = "none";
  chatSlctrs.style.display = "none";

  chatWindow.forEach((window) => {
    window.classList.remove("chatbar-active");
  });

  ctnrUserRight.style.display = "none";
  ctnrUserLeft.style.display = "none";
});

// CHAT WINDOWS
