import PreschoolItem from "@/Components/PreschoolItem"
import HomeLayout from "@/Layouts/HomeLayout.jsx";


let PreschoolItems = [
    {
        id: 1,
        title: 'Ингушский алфавит',
        type: 'alphavit',
        icon: '/img/icons/preschool/ing.svg'
    },
    {
        id: 2,
        title: 'Русский алфавит',
        type: 'alphavit',
        icon: '/img/icons/preschool/rus.svg'
    },
    {
        id: 3,
        title: 'Арабский алфавит',
        type: 'alphavit',
        icon: '/img/icons/preschool/arabic.svg'
    },
    {
        id: 4,
        title: 'Арабские цифры',
        type: 'numbers',
        icon: '/img/icons/preschool/arabNum.svg'
    },
    {
        id: 5,
        title: 'Римские цифры',
        type: 'numbers',
        icon: '/img/icons/preschool/rimNum.svg'
    },
    {
        id: 6,
        title: 'Таблица умножения',
        type: 'numbers',
        icon: ''
    },
    {
        id: 7,
        title: 'Геометрические фигуры',
        type: 'figures',
        icon: ''
    },
]

export default function Preschool() {
    return (
        <HomeLayout>
            <section className="main-content">
                <div className="container preschool-container">

                    <div className="preschool-items">
                        {PreschoolItems.map(item => (
                            <PreschoolItem key={item.id} title={item.title} icon={item.icon}/>
                        ))}
                    </div>
                </div>
            </section>
        </HomeLayout>
)
}
