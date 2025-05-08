// Function to switch between tabs (Laboratories or Exercises)
function openTab(event, tabId) {
    // Hide all tab contents
    const tabs = document.querySelectorAll('.tab-content');
    tabs.forEach(tab => tab.style.display = 'none');
    
    // Remove 'active' class from all buttons
    const buttons = document.querySelectorAll('.tab-btn');
    buttons.forEach(btn => btn.classList.remove('active'));
    
    // Show the selected tab and mark its button as active
    document.getElementById(tabId).style.display = 'block';
    event.target.classList.add('active');
}
  
// Function to load PHP file into the output box
function loadFile(filePath) {
    const outputBox = document.getElementById('output-box');
    
    // Clear the output box and add an iframe to show the file
    outputBox.innerHTML = `
      <iframe src="${filePath}" width="100%" height="500px" frameborder="0"></iframe>
    `;
}
  
// Function to open a folder within the Exercises tab
function openFolder(folderId) {
    // Hide all folder contents
    const folders = document.querySelectorAll('.folder-content');
    folders.forEach(folder => folder.style.display = 'none');
    
    // Show the selected folder content
    document.getElementById(folderId).style.display = 'block';
}
