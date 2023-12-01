document.addEventListener("DOMContentLoaded", function () {
    var lostItems = [
        {
            name: "Totebag Bigbox",
            image: "totebag.jpg",
            description: "Tas totebag putih, berisi 2 tumbler dan 2 topi yang berlabel Bigbox. Ditemukan di ruangan 2505."
        },
        {
            name: "Iphone XR",
            image: "ipon.jpg",
            description: "Hp iPhone XR, case warna biru tua. Ditemukan di ruangan 2607."
        },
        // Untuk tambah item make array
    ];

    var lostItemsContainer = document.getElementById("lostItemsContainer");

    lostItems.forEach(function (item) {
        var itemDiv = document.createElement("div");
        itemDiv.classList.add("item");
        itemDiv.innerHTML = `
            <h3>${item.name}</h3>
            <img src="${item.image}" alt="" height="300" width="auto">
            <p>${item.description}</p>
            <button class="claim-button">Claim</button>
        `;
        lostItemsContainer.appendChild(itemDiv);
    });

    var claimButtons = document.querySelectorAll(".claim-button");
    var claimFormSection = document.getElementById("claim-form");
    var submitClaimButton = document.getElementById("submit-claim");
    var closePopupButton = document.getElementById("close-popup");

    claimButtons.forEach(function (button, index) {
        button.addEventListener("click", function () {
            var currentItem = lostItems[index];
            document.getElementById("claimant-name").value = "";
            document.getElementById("claimant-contact").value = "";
            claimFormSection.style.display = "block";
        });
    });

    submitClaimButton.addEventListener("click", function (event) {
        event.preventDefault();
        claimFormSection.style.display = "none";
    });

    closePopupButton.addEventListener("click", function () {
        claimFormSection.style.display = "none";
    });
});