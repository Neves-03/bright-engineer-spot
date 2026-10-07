import { createFileRoute } from '@tanstack/react-router';
import { ProjectsSection } from '@/components/portfolio/sections';
import { portfolioHead } from '@/components/portfolio/metadata';
export const Route = createFileRoute('/projetos')({head:()=>portfolioHead('Projetos','Explora três projetos fictícios: Núcleo CLI, Pulso e Rota Certa.'),component:Page});
function Page() { return <div className="page-main"><ProjectsSection/></div>; }
