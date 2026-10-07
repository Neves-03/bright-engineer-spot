import { createFileRoute } from '@tanstack/react-router';
import { Hero, AboutSection, ProjectsSection, SkillsSection, ContactSection } from '@/components/portfolio/sections';
import { portfolioHead } from '@/components/portfolio/metadata';
export const Route = createFileRoute('/')({head:()=>portfolioHead('Portefólio de Engenharia Informática','Conhece Diogo Mateus, estudante de Engenharia Informática, os seus projetos e competências em desenvolvimento de software.'),component:Index});
function Index() { return <><Hero/><AboutSection/><ProjectsSection/><SkillsSection/><ContactSection/></>; }
