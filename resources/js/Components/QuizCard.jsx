export default function QuizCard({ name, image, background}) {
    return (
        <div className="card" style={{ backgroundImage: `url(${image})` }}>
                    <div className="quiz-title" style={{backgroundColor: background}}>
                        <h3>{name}</h3>
                    </div>
                    <div className="quiz-button">
                        <button style={{backgroundColor: background}}>Пройти</button>
                    </div>
                </div>
    )
}