export default function FairyCard({title, image, text}) {
    return(
        <div className="fairy-card">
            <div className="fairy-left-image">
                <img src={image} alt="" />
            </div>
            <div className="fairy-right">
                <span>Сказка</span>
                <h2>{title}</h2>
                
                <p>
                    {text}
                </p>
                <div className="fairy-card-button">
                    <button>Читать дальше <img src="/img/arrow-white.svg" alt=""/></button>
                </div>
            </div>
        </div>
    )
}


