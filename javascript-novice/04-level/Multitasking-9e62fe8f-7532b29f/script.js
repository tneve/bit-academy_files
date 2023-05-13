const blogPosts = {
    posts: [
        {
            titel: "Het geheim van Google",
            tags: ["Google", "Business", "Artificial Intelligence"],
            auteurs: ["Bob", "Alice"],
        },
        {
            titel: "IT bepaalt de toekomst",
            tags: ["Filosofie", "Innovatie"],
            auteurs: ["Alice"],
        },
        {
            titel: "Je zal deze 10 redenen dat ik een hekel heb aan clickbait en ironie nooit geloven!!!",
            tags: ["Cultuur", "Opinie"],
            auteurs: ["Bob"],
        },
    ],
};

/**
 * Simuleer het ophalen van data vanuit een API.
 * @returns een promise voor het getPosts object dat hierboven staat.
 */
async function getPosts() {
    return new Promise((resolve) => {
        setTimeout(() => {
            resolve(blogPosts);
        }, 2000);
    });
}

async function init() {
    const result = await getPosts();
    for (let i = 0; i < result.posts.length; i++) {
        document.getElementById(`titel${i}`).innerHTML = result.posts[i].titel;
        document.getElementById(`auteurs${i}`).innerHTML = result.posts[i].auteurs;
        document.getElementById(`tags${i}`).innerHTML = result.posts[i].tags;
    }
}

init();

