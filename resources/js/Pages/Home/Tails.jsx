import FairyCard from '@/Components/FairyCard';
import '../../../../public/globals.css';

import Filter from '@/Components/Filter';
import HomeLayout from "@/Layouts/HomeLayout.jsx";

let fairy = [
    {
        title: 'Пхьиди, дахкеи',
        text: "ВІаший юххе дахаш ши лоалахо хиннад - пхьи- ди, дахкеи. Дехко, шийна ахканна болх а баь, Іана йоа- кхона кІоагилг даьд, хІаьта пхьид вІалла болх а ца беш, ахканна Іам чу «варкъ» яхаш яьгІай.",
        image: '/img/fairy1.png',
    },
    {
        title: 'Сулейман-пайхамари, зунгати',
        text: "Сулейма-пайхамар са мел доаллача хIаман мотт ховш хиннав яхаш дувц. Боккхача бІуна хьалха а волаш, цкъа тІем тІа во- даш хиннав Сулейма.",
        image: '/img/fairy2.png',
    },


]

export default function Tails() {
    return (
        <HomeLayout>
            <section className="main-content">
                <div className="container quiz-container">

                    <div className="filter-bar">
                        <Filter/>
                    </div>

                    <div className="cards">
                        {fairy.map(fairy => (
                            <FairyCard key={fairy.id} title={fairy.title} image={fairy.image} text={fairy.text}/>
                        ))}
                    </div>

                </div>
            </section>
        </HomeLayout>
    )
}
