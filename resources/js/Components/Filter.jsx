'use client';

import React from "react";

export default function Filter({title}) {

    const [isActive, setActive] = React.useState(false);

    const toggleClass = () => {
        setActive(!isActive);
      };


    return (
        <div className="">
            <button className={`filter d-flex align-items-center justify-content-center ${isActive ? 'active' : ''}`}
                onClick={toggleClass}>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="filter 1" clipPath="url(#clip0_104_2393)">
                    <path id="Vector" d="M11.6667 20C11.4864 20 11.3109 19.9415 11.1667 19.8333L7.83334 17.3333C7.72984 17.2557 7.64584 17.1551 7.58798 17.0393C7.53013 16.9236 7.5 16.796 7.5 16.6667V11.9833L1.65334 5.40583C1.2381 4.9374 0.966987 4.35901 0.872571 3.7402C0.778155 3.12138 0.864458 2.48846 1.12111 1.91751C1.37776 1.34656 1.79383 0.861882 2.31932 0.521721C2.84481 0.181561 3.45736 0.000395349 4.08334 0L15.9167 0C16.5426 0.000734209 17.155 0.182199 17.6803 0.522589C18.2055 0.862978 18.6214 1.34781 18.8777 1.91882C19.1341 2.48983 19.2201 3.12273 19.1255 3.74146C19.0308 4.36018 18.7595 4.93841 18.3442 5.40667L12.5 11.9833V19.1667C12.5 19.3877 12.4122 19.5996 12.2559 19.7559C12.0996 19.9122 11.8877 20 11.6667 20Z" fill="#EFEFEF"/></g><defs><clipPath id="clip0_104_2393"><rect width="20" height="20" fill="white"/></clipPath></defs>
                </svg>
                <span>Фильтр</span>
            </button>
            <div className= {isActive ? 'filter-items active': 'filter-items'}>
                <ul>
                    <li>{title}</li>
                </ul>
            </div>
        </div>
    )
}
