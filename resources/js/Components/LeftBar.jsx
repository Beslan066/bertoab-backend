

import React from 'react';
import {Link} from "@inertiajs/react";


const links = [
    {
        title: 'База знаний',
        image: '/img/icons/knowlwdge.svg',
        action: '/'
    },
    {
        title: 'Викторины',
        image: '/img/icons/quiz.svg',
        action: '/quiz'
    },
    {
        title: 'Дошколятам',
        image: '/img/icons/pre-school.svg',
        action: '/preschool'
    },
    {
        title: 'Книги',
        image: '/img/icons/book.svg',
        action: 'books'
    },
    {
        title: 'Сказки',
        image: '/img/icons/moon-stars.svg',
        action: '/tails'
    },
    {
        title: 'Мультфильмы',
        image: '/img/icons/multfilm.svg',
        action: ''
    },

    {
        title: 'Мероприятия',
        image: '/img/icons/events.svg',
        action: '/events'
    },
    {
        title: 'Игровой раздел',
        image: '/img/icons/game.svg',
        action: ''
    },
    {
        title: 'Рейтинг',
        image: '/img/rating.svg',
        action: '/rating'
    },
]

export default function LeftBar() {

    return (
        <section className="left-bar">
                <header className="logo">
                    <img src="/img/logo.svg" alt="Берий Тоаба"/>
                </header>

                <section className="bar-list">
                    <ul>
                        {links.map(link => (
                            <Link href={link.action}>
                                <li className="">
                                    <img src={link.image} alt=""/>
                                    <span>{link.title}</span>
                                </li>
                            </Link>
                        ))}

                    </ul>
                </section>

                <footer>
                    <ul>
                        <li>
                            <div>
                                <a><img src="/img/icons/globe.svg" alt=""/></a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a><img src="/img/icons/bell.svg" alt=""/></a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a><img src="/img/icons/settings.svg" alt=""/></a>

                            </div>
                        </li>
                        <li>
                            <div>
                                <a><img src="/img/icons/user.svg" alt=""/></a>
                            </div>
                        </li>
                    </ul>
                </footer>
            </section>
    )
}
