export default function PreschoolItem({icon, title}) {
    return(
        <div className="preschool-item">
            <img src={icon} alt="" />
            <span>{title}</span>
        </div>
    )
}

