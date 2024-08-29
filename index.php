<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hoverable Sidebar Menu HTML CSS & JavaScript</title>
    <link rel="stylesheet" href="style-master.css" />
    <!-- Boxicons CSS -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="script.js" defer></script>
  </head>
  <body>
    <nav class="sidebar hoverable close">
      <div class="logo_items flex">
        <span class="nav_image">
          <img src="assets/feb_illustrator.png" alt="logo_img" />
        </span>
        <span class="logo_name">CodingNepal</span>
        <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar" style="display: none;"></i>
        <i class="bx bx-x" id="sidebar-close"></i>
      </div>

      <div class="menu_container">
        <div class="menu_items">
         

          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Editor</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bxs-magic-wand"></i>
                <span>Magic Build</span>
              </a>
            </li>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bx-folder"></i>
                <span>New Projects</span>
              </a>
            </li>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bx-cloud-upload"></i>
                <span>Upload New</span>
              </a>
            </li>
          </ul>

        
        </div>

        <!-- <div class="sidebar_profile flex">
          <span class="nav_image">
            <img src="assets/feb_illustrator.png" alt="logo_img" />
          </span>
          <div class="data_text">
            <span class="name">David Oliva</span>
            <span class="email">david@gmail.com</span>
          </div>
        </div> -->
      </div>
    </nav>

    <!-- Navbar -->
    <nav class="navbar flex">
      <i class="bx bx-menu" id="sidebar-open"></i>
      <input type="text" placeholder="Search..." class="search_box" />
      <span class="nav_image">
        <img src="images/profile.jpg" alt="logo_img" />
      </span>
    </nav>



    <script>
        // Selecting the sidebar and buttons
        const sidebar = document.querySelector(".sidebar");
        const sidebarOpenBtn = document.querySelector("#sidebar-open");
        const sidebarCloseBtn = document.querySelector("#sidebar-close");
        const sidebarLockBtn = document.querySelector("#lock-icon");

        // Function to toggle the lock state of the sidebar
        const toggleLock = () => {
        sidebar.classList.toggle("locked");
        // If the sidebar is not locked
        if (!sidebar.classList.contains("locked")) {
            sidebar.classList.add("hoverable");
            sidebarLockBtn.classList.replace("bx-lock-alt", "bx-lock-open-alt");
        } else {
            sidebar.classList.remove("hoverable");
            sidebarLockBtn.classList.replace("bx-lock-open-alt", "bx-lock-alt");
        }
        };

        // Function to hide the sidebar when the mouse leaves
        const hideSidebar = () => {
        if (sidebar.classList.contains("hoverable")) {
            sidebar.classList.add("close");
        }
        };

        // Function to show the sidebar when the mouse enter
        const showSidebar = () => {
        if (sidebar.classList.contains("hoverable")) {
            sidebar.classList.remove("close");
        }
        };

        // Function to show and hide the sidebar
        const toggleSidebar = () => {
        sidebar.classList.toggle("close");
        };

        // If the window width is less than 800px, close the sidebar and remove hoverability and lock
        if (window.innerWidth < 800) {
        sidebar.classList.add("close");
        sidebar.classList.remove("locked");
        sidebar.classList.remove("hoverable");
        }

        // Adding event listeners to buttons and sidebar for the corresponding actions
        // sidebarLockBtn.addEventListener("click", toggleLock);
        sidebar.addEventListener("mouseleave", hideSidebar);
        sidebar.addEventListener("mouseenter", showSidebar);
        // sidebarOpenBtn.addEventListener("click", toggleSidebar);
        // sidebarCloseBtn.addEventListener("click", toggleSidebar);
    </script>
  </body>
</html>