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
const msgTop = document.querySelector(".message-top");
const msg = document.querySelectorAll(".message");
const msgContainer = document.querySelector(".message-write");
const msgContent = document.querySelector(".message-content");
const chatWindow = document.querySelectorAll(".chat-window");
const btnSend = document.querySelector(".message-send");
const clearChat = document.querySelector(".btn-clearchat");

// chat.forEach((msgTop) => {
//   msgTop.addEventListener("click", () => {
//     if (!msgTop.classList.contains("chatbar-active")) {
//       chat.forEach((element) => {
//         element.classList.remove("chatbar-active");
//       });
//       msgTop.classList.add("chatbar-active");
//     }
//   });
// });

// chat.forEach((selector) => {
//   selector.addEventListener("click", () => {
//     selector.parentElement.children.classList.remove("chat-window-active");
//   });
// });

msgContent.addEventListener("keydown", (key) => {
  if (key.key === "Enter") {
    if (!msgContent.value.length == 0) {
      msgCreate.innerHTML = msgContent.value;
      msgTop.insertAdjacentHTML(
        "beforeend",
        `<div class="message-user-${currentUser === 1 ? "one" : "two"}">${
          msgContent.value
        }</div>`
      );
      //
    }
    console.log("Clearing...");
    msgContent.value = "";
    key.preventDefault();
  }
});

btnSend.addEventListener("click", () => {
  if (!msgContent.value.length == 0) {
    msgCreate.innerHTML = msgContent.value;
    msgTop.insertAdjacentHTML(
      "beforeend",
      `<div class="message-user-${currentUser === 1 ? "one" : "two"}">${
        msgContent.value
      }</div>`
    );
    msgContent.value = "";
  }
});

clearChat.addEventListener("click", () => {
  msgTop.innerHTML = "";
});

// USERS

const signOutBtn = document.querySelector(".btn-signout");
// const ctnrUser = document.querySelectorAll(".container-user");
const ctnrUserRight = document.querySelector(".container-user-right");
const ctnrUserLeft = document.querySelector(".container-user-left");
const userImg = document.querySelector(".user-image");

// SIGN OUT

signOutBtn.addEventListener("click", () => {
  modalBkgrnd.style.display = "initial";
  lgnModal.style.display = "initial";
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
