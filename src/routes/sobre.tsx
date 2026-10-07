import { createFileRoute } from '@tanstack/react-router';
import { AboutSection } from '@/components/portfolio/sections';
import { portfolioHead } from '@/components/portfolio/metadata';
export const Route = createFileRoute('/sobre')({head:()=>portfolioHead('Sobre Mim','Conhece o percurso, os interesses e a abordagem de Diogo Mateus à Engenharia Informática.'),component:Page});
function Page() { return <div className="page-main"><AboutSection/></div>; }
