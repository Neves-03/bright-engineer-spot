import { createFileRoute } from '@tanstack/react-router';
import { SkillsSection } from '@/components/portfolio/sections';
import { portfolioHead } from '@/components/portfolio/metadata';
export const Route = createFileRoute('/competencias')({head:()=>portfolioHead('Competências','Tecnologias de Diogo Mateus: JavaScript, Python, C#, PHP, HTML, CSS, Node.js e MySQL.'),component:Page});
function Page() { return <div className="page-main"><SkillsSection/></div>; }
