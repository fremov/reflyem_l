<div class="skill-tree">
    <div class="skill-tier">
        <div class="skill" data-tooltip="Skill 1"></div>
        <div class="skill" data-tooltip="Skill 2"></div>
    </div>
    <div class="skill-tier">
        <div class="skill" data-tooltip="Skill 3"></div>
        <div class="skill" data-tooltip="Skill 4"></div>
    </div>
    <div class="skill-tier">
        <div class="skill" data-tooltip="Skill 5"></div>
    </div>
</div>


<style>
    .skill-tree {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .skill-tier {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        width: 100%;
    }

    .skill {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: gray;
        cursor: pointer;
        position: relative;
    }

    .skill:hover::before {
        content: attr(data-tooltip);
        position: absolute;
        bottom: calc(100% + 10px);
        left: 50%;
        transform: translateX(-50%);
        padding: 5px;
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
        border-radius: 5px;
        font-size: 14px;
        white-space: nowrap;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    .skill:hover::after {
        content: " ";
        position: absolute;
        bottom: calc(100% + 5px);
        left: 50%;
        transform: translateX(-50%);
        border-width: 5px;
        border-style: solid;
        border-color: transparent transparent rgba(0, 0, 0, 0.8) transparent;
    }

    .skill:hover::before,
    .skill:hover::after {
        opacity: 1;
    }
</style>

<script>
    const skills = document.querySelectorAll(".skill");

    skills.forEach((skill) => {
        skill.addEventListener("click", () => {
            skill.classList.toggle("active");
        });
    });
</script>
