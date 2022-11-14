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





// CHAT

const msgCreate = document.createElement("div");
const msg = document.querySelectorAll(".message");
const msgContainer = document.querySelector(".message-write");
const msgContent = document.querySelector(".message-content");
const chatWindow = document.querySelectorAll(".chat-window");
const btnSend = document.querySelector(".message-send");
const clearChat = document.querySelector(".btn-clearchat");
const window1 = document.querySelector('.chat-window1') ?? 'hello1';
const window2 = document.querySelector('.chat-window2') ?? 'hello2';
const window3 = document.querySelector('.chat-window3') ?? 'hello3';
const window4 = document.querySelector('.chat-window4') ?? 'hello4';
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

const totalChats = chat.length
localStorage.setItem('totalChats', totalChats)
totalChatsLocalStorage = parseInt(localStorage.getItem('totalChats'));

if(localStorage.getItem('totalChats') == 0) {
  localStorage.setItem('activeChat', 0)
}
console.log('Total chats: ' + localStorage.getItem('totalChats'));
console.log('Active chat: ' + localStorage.getItem('activeChat'));

const activeChatNum = 'chat-window' + localStorage.getItem('activeChat');
const activeChatAmt =  5
const windows = document.querySelectorAll('.chat-window')

chat.forEach(eachChat => {
  eachChat.addEventListener('click', () => {

  })
})

switch (activeChatNum) {
  case 'chat-window1':
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
    // chatSelector1.classList.add('chat-selector-active')
    // chatSelector2.classList.remove('chat-selector-active')
    // chatSelector3.classList.remove('chat-selector-active')
    // chatSelector4.classList.remove('chat-selector-active')

    break;

  case 'chat-window2':
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
    // chatSelector1.classList.remove('chat-selector-active')
    // chatSelector2.classList.add('chat-selector-active')
    // chatSelector3.classList.remove('chat-selector-active')
    // chatSelector4.classList.remove('chat-selector-active')
    break;

  case 'chat-window3':
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
    // chatSelector1.classList.remove('chat-selector-active')
    // chatSelector2.classList.remove('chat-selector-active')
    // chatSelector3.classList.add('chat-selector-active')
    // chatSelector4.classList.remove('chat-selector-active')
    break;

  case 'chat-window4':
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
    // chatSelector1.classList.remove('chat-selector-active')
    // chatSelector2.classList.remove('chat-selector-active')
    // chatSelector3.classList.remove('chat-selector-active')
    // chatSelector4.classList.add('chat-selector-active')
    break;
}

const chatSelectorCrosses = document.querySelectorAll('.chat-selector-cross');

chat.forEach(selector => {
  selector.addEventListener('mouseover', () => {
    chatSelectorCrosses.forEach(cross => {
      cross.style.display = 'block'
    });
  })
});

chat.forEach(selector => {
  selector.addEventListener('mouseout', () => {
    chatSelectorCrosses.forEach(cross => {
      cross.style.display = 'none'
    });
  })
});

const chatListWindow = document.querySelector('.chat-list-window')
const chatListBtn = document.querySelector('.btn-chatlist')
const chatListCloseBtn = document.querySelector('.list-window-close')
const userModalBackground = document.querySelector('.modal-background');
const newChatBtn = document.querySelector('.new-chat-btn')

let chatListHidden = 1;

newChatBtn.addEventListener('click', () => {
  if (chatListHidden == 1) {
    chatListWindow.style.display = 'initial'
    userModalBackground.style.display = 'initial'
    setTimeout(() => {
      chatListWindow.style.opacity = '100%';
      userModalBackground.style.opacity = '100%';
      chatListHidden = 0
    }, 10);
    
  } else if (chatListHidden == 0) {
    chatListWindow.style.opacity = '0%';
    userModalBackground.style.opacity = '0%';
    chatListHidden = 1
    setTimeout(() => {
      chatListWindow.style.display = 'none';
      userModalBackground.style.display = 'none'
    }, 250);
  }
})



chatListBtn.addEventListener('click', () => {
  if (chatListHidden == 1) {
    chatListWindow.style.display = 'initial'
    userModalBackground.style.display = 'initial'
    setTimeout(() => {
      chatListWindow.style.opacity = '100%';
      userModalBackground.style.opacity = '100%';
      chatListHidden = 0
    }, 10);
    
  } else if (chatListHidden == 0) {
    chatListWindow.style.opacity = '0%';
    userModalBackground.style.opacity = '0%';
    chatListHidden = 1
    setTimeout(() => {
      chatListWindow.style.display = 'none';
      userModalBackground.style.display = 'none'
    }, 250);
  }
})

chatListCloseBtn.addEventListener('click', () => {
  if (chatListHidden == 1) {
    chatListWindow.style.display = 'initial'
    userModalBackground.style.display = 'initial'
    setTimeout(() => {
      chatListWindow.style.opacity = '100%';
      userModalBackground.style.opacity = '100%';
      chatListHidden = 0
    }, 10);
    
  } else if (chatListHidden == 0) {
    chatListWindow.style.opacity = '0%';
    userModalBackground.style.opacity = '0%';
    chatListHidden = 1
    setTimeout(() => {
      chatListWindow.style.display = 'none';
      userModalBackground.style.display = 'none'
    }, 250);
  }
})


// USERS

const userModal = document.querySelector('.user-modal');
const signOutBtn = document.querySelector(".btn-signout");
const ctnrUserRight = document.querySelector(".container-user-right");
const ctnrUserLeft = document.querySelector(".container-user-left");
const userImg = document.querySelector(".user-image");
const editUserBtn = document.querySelector('.btn-editinfo');
const userModalCloseBtn = document.querySelector('.user-window-close');
const containerLeft = document.querySelector('.container-user-left');

let userModalHidden = 1;
editUserBtn.addEventListener('click', () => {
  if (userModalHidden == 1) {
    userModal.style.display = 'initial'
    userModalBackground.style.display = 'initial'
    setTimeout(() => {
      userModal.style.opacity = '100%';
      userModalBackground.style.opacity = '100%';
      userModalHidden = 0
    }, 10);

  } else if (userModalHidden == 0) {
    userModal.style.opacity = '0%';
    userModalBackground.style.opacity = '0%';
    userModalHidden = 1
    setTimeout(() => {
      userModal.style.display = 'none';
      userModalBackground.style.display = 'none'
    }, 250);
  }
})

userModalCloseBtn.addEventListener('click', () => {
  if (userModalHidden == 1) {
    userModal.style.display = 'initial'
    userModalBackground.style.display = 'initial'
    setTimeout(() => {
      userModal.style.opacity = '100%';
      userModalBackground.style.opacity = '100%';
      userModalHidden = 0
    }, 10);

  } else if (userModalHidden == 0) {
    userModal.style.opacity = '0%';
    userModalBackground.style.opacity = '0%';
    userModalHidden = 1
    setTimeout(() => {
      userModal.style.display = 'none';
      userModalBackground.style.display = 'none'
    }, 250);
  }
})

userModalBackground.addEventListener('click', () => {
  userModal.style.opacity = '0%';
  userModalBackground.style.opacity = '0%';
  userModalHidden = 1
  chatListWindow.style.opacity = '0%';
  userModalBackground.style.opacity = '0%';
  chatListHidden = 1
  setTimeout(() => {
    userModal.style.display = 'none';
    userModalBackground.style.display = 'none'
    chatListWindow.style.display = 'none';
    userModalBackground.style.display = 'none'
  }, 250);
})

containerLeft.addEventListener('mouseover', () => {
  containerLeft.style.transform = 'translateX(0%)';
})

containerLeft.addEventListener('mouseleave', () => {
  setTimeout(() => {
    containerLeft.style.transform = 'translateX(80%)';
  }, 100);
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
