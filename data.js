const data = [
    {
        id: 1,
        name: "Pantera",
        url: "https://townsquare.media/site/366/files/2014/09/Pantera.jpg?w=980&q=75",
        members: ['Phil Anselmo', 'Dimebag Darrell', 'Vinnie Paul', 'Rex Brown'],
        desc: "Pantera, was an American heavy metal band from Arlington, Texas formed in 1981. The group's best-known lineup consisted of the Abbott brothers—drummer Vinnie Paul and guitarist Dimebag Darrell—along with vocalist Phil Anselmo and bassist Rex Brown. In addition to their development and popularization of the groove metal subgenre, Pantera is credited (along with others such as Testament, Sepultura and Machine Head) for being part of the second wave of thrash metal scene from the late 1980s to early-to-mid 1990s. Having started as a glam metal band, Pantera released three albums in the mid-1980s with founding member Terry Glaze as lead vocalist. Looking for a new and heavier sound, Pantera replaced Glaze with Anselmo in late 1986 and released Power Metal in 1988. The band secured a record deal with the major label Atco the following year. With its fifth album, 1990's Cowboys from Hell, Pantera popularized the groove metal genre, while its 1992 follow-up Vulgar Display of Power exhibited an even heavier sound. Far Beyond Driven (1994) debuted at number one on the Billboard 200."
    },
    {
        id: 2,
        name: "Pink Floyd",
        members: ['Roger Waters', 'David Gilmour', 'Syd Barrett', 'Richard Wright', 'Nick Mason', 'Bob Klose'],
        url: "https://ca-times.brightspotcdn.com/dims4/default/fe0748f/2147483647/strip/true/crop/2048x1381+0+0/resize/840x566!/quality/90/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2F0c%2F88%2Fc677872ab16b54c26efa86ffc980%2Fla-et-ms-1975-rock-concert-511-arrested-197604-001",
        desc: "Pink Floyd were an English rock band formed in London in 1965. Gaining a following as a psychedelic rock group, they were distinguished for their extended compositions, sonic experimentation, philosophical lyrics and elaborate live shows, and became a leading band of the progressive rock genre. They are one of the most commercially successful and influential bands in popular music history. Pink Floyd were founded by students Syd Barrett (guitar, lead vocals), Nick Mason (drums), Roger Waters (bass guitar, vocals), and Richard Wright (keyboards, vocals). Under Barrett's leadership, they released two charting singles and a successful debut album, The Piper at the Gates of Dawn (1967). Guitarist and vocalist David Gilmour joined in December 1967; Barrett left in April 1968 due to deteriorating mental health. Waters became the primary lyricist and thematic leader, devising the concepts behind the albums The Dark Side of the Moon (1973), Wish You Were Here (1975), Animals (1977), The Wall (1979), and The Final Cut (1983). The band also composed several film scores."
    },
    {
        id: 3,
        name: "The Doors",
        members: ['Jim Morrison', 'Ray Manzarek', 'Robby Krieger', 'Jon Densmore', 'Jim Manzarek', 'Rick Manzarek', 'Paul Sullivan'],
        url: "https://static01.nyt.com/images/2013/05/21/arts/MANZAREK1-obit/MANZAREK1-obit-superJumbo.jpg",
        desc: "With an intoxicating, genre-blending sound, provocative and uncompromising songs, and the mesmerizing power of singer Jim Morrison’s poetry and presence, The Doors had a transformative impact not only on popular music but on popular culture."
    },
    {
        id: 4,
        name: "Pearl Jam",
        members: ['Eddie Vedder', 'Stone Gossard', 'Mike McCready', 'Jeff Ament', 'Matt Cameron', 'Dave Abburuzzese', 'Jack Irons', 'Dave Krusen', 'Matt Chamberlain'],
        url: "https://www.rollingstone.com/wp-content/uploads/2020/09/pearl-jam-vote.jpg",
        desc: "October 22, 2015 officially marked 25 years of Pearl Jam performing live. Ten studio albums, hundreds of unique live performances and hundreds of official live concert bootleg releases later, the band continue to be critically acclaimed and commercially successful -- with over 85 million albums sold worldwide."
    }
]

const sectionCenter = document.querySelector('.section');
const testSection = document.querySelector('.test');
const welcome = document.querySelector('.welcome');
// console.log(testSection.innerHTML.trim());
window.addEventListener('DOMContentLoaded', function () {
    let displayBand = data.filter((band) => {
        return band.name.toLowerCase() === testSection.innerHTML.trim().toLowerCase();
    })
    // console.log(displayBand[0]);
    welcome.innerHTML = displayBand[0].name;
    var div = document.createElement('div');
    div.classList.add('container-fluid');
    div.innerHTML = `
    <article class="band" id=${displayBand[0].id}>
        <div class="img-container">
            <img src=${displayBand[0].url} alt=${displayBand[0].name}>
        </div>
        <div class="item-info">
            <h3>${displayBand[0].name}</h3>
            <h6 class="members">Members : ${displayBand[0].members}</h6>
            <p class="desc">${displayBand[0].desc}</p>
        </div>
    </article>
    `;
    console.log(displayBand[0].members);
    sectionCenter.appendChild(div);
})