<!DOCTYPE html>
<html lang-en>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="#chpt10">Chapter 10</a></li>
                    <li><a href="#chpt11">Chapter 11</a></li>
                    <li><a href="#chpt12">Chapter 12</a></li>
                    <li><a href="#chpt13">Chapter 13</a></li>
                    <li><a href="#chpt14">Chapter 14</a></li>
                    <li><a href="#chpt15">Chapter 15</a></li>
                    <li><a href="#chpt16">Chapter 16</a></li>
                </ul>
            </nav>
        </header>

        <section id="chpt10">
            <div class="wrap">
            <h1>Chapter 10</h1>

            <h2>10.1 Software Development: Theory vs. Practice</h2>

            <p><strong>Waterfall life-cycle model</strong></p>

            <ol>
                <li>Requirements</li>
                <li>Analysis</li>
                <li>Design</li>
                <li>Implementation</li>
            </ol>

            <p><strong>Life-cycle model:</strong> a theoretical description of how to build software</p>
            <p><strong>Life cycle:</strong> the actual series of steps followed in the building of a specific product</p>
            <!-- figure 10.1 -->
            <p><strong>Moving-target problem:</strong> changes to the requirements before the product is complete. And whenever the requirements change, the partially developed product has to be changed and, again, the model of Figure 10.1 breaks down.</p>

            <h2>10.2 Iteration &amp; Incrementation</h2>

            <p><strong>Iteration:</strong> we produce the first version of the artifact, then we revise it and produce the second version, and so on. Our intent is that each version is closer to our target than its predecessor and finally we construct a version that is satisfactory.</p>
            <p><strong>Miller’s Law:</strong> In 1956, George Miller, a professor of psychology, showed that, at any one time, we humans are capable of concentrating on only approximately seven chunks (units of information).</p>
            <p><strong>Stepwise refinement:</strong> we concentrate on those aspects that are currently the most important and postpone until later those aspects that are currently less critical. In other words, every aspect is eventually handled but in order of current importance.</p>
            <p><strong>Incrementation: </strong> This means that we start off by constructing an artifact that solves only a small part of what we are trying to achieve. Then, we consider further aspects of the problem and add the resulting new pieces to the existing artifact. This is an incremental process.</p>
            <p><strong>Iterative-and-incremental life-cycle model:</strong> In practice, iteration and incrementation are used in conjunction with one another. That is, an artifact is constructed piece by piece (incrementation), and each increment goes through multiple versions (iteration). Another way of looking at iteration and incrementation is that incrementation adds functionality, whereas iteration improves the quality of an increment.</p>
            <!-- figure 10.2 -->

            <h2>10.3 The Unified Process</h2>

            <p><strong>Unified process:</strong> The major object-oriented methodology used in the software industry today is the <em>Unified Process</em>. Despite its name, the Unifi ed Process is actually a methodology.</p>
            <p><strong>Unified Modeling Language (UML):</strong> The Unified Process uses a graphical language, the <em>Unified Modeling Language (UML)</em> to represent the software being developed. The object-oriented paradigm uses modeling throughout.</p>
            <p><strong>Model:</strong> a set of UML diagrams that represent one or more aspects of the software product to be developed. That is, UML is the tool that we use to represent <em>(model)</em> the target software product.</p>

            <h2>10.4 Workflow Overview</h2>

            <p><strong>Workflows (activities)</strong> performed over the entire life cycle. There are five core workflows:</p>
            <ol>
                <li>Requirements workflow: determine what the client needs</li>
                <li>Analysis workflow: analyze and refine the requirements to achieve a detailed understanding</li>
                <li>Design workflow: shows <em>how</em> the product is to function; refine the artifacts of the analysis workflow</li>
                <li>Implementation workflow: implement the target software product in the chosen implementation language</li>
                <li>Test workflow: in the Unifi ed Process testing is carried out in parallel with the other workflows, starting from the beginning</li>
            </ol>

            <h2>10.5 Teams</h2>

            <p><strong>Team:</strong> the work is shared among a group of organized professionals.</p>

            <h2>10.6 Cost-Benefit Analysis</h2>

            <p><strong>Cost-benefit analysis:</strong> One way of determining whether a possible course of action would be profitable is to compare estimated future benefits against projected future costs. This is termed <em>cost–benefit analysis</em>. Cost–benefit analysis is a fundamental technique in deciding whether a client should computerize his or her business, and if so, in what way.</p>

            <h2>10.7 Metrics</h2>

            <p><strong>Metrics:</strong> Without measurements (or metrics), there is no way to detect problems early in the software process, before they get out of hand.</p>
            <ol>
                <li>Size; in lines of code</li>
                <li>Cost; in dollars</li>
                <li>Duration; in months</li>
                <li>Effort; in person-months</li>
                <li>Quality; number of faults detected</li>
            </ol>

            <h2>10.8 CASE</h2>

            <p><strong>CASE:</strong> an acronym that stands for <em>computer-aided software engineering</em>, that is, software that assists with software development and maintenance.</p>
            <p><strong>Tool:</strong> a product that assists in just one aspect of the production of software.</p>
            <ol>
                <li>a tool that draws UML diagrams</li>
                <li><em>a data dictionary;</em> a computerized list of all items defined within a product</li>
                <li><em>a report generator;</em> which generates the code needed for producing a report</li>
                <li><em>a screen generator;</em> which assits the software developer in producing the code for a data capture screen</li>
            </ol>
            <p>A CASE <strong>workbench</strong> is a collection of tools that together support one or two activities. One example is a <strong>requirements, analysis, and design workbench</strong> that incorporates a UML diagram tool and a consistency checker; another is a <strong>project management workbench</strong> that is used in every workflow. Finally, a CASE <strong>environment</strong> supports the complete software process.</p>

            <h2>10.9 Versions &amp; Configuration</h2>

            <p><strong>Versions:</strong> Whenever an artifact is changed, whether during development or maintenance, there will be two <em>versions</em> of the artifact: the old version and the new version.</p>
            <p><strong>Version control tool:</strong> a CASE tool that keeps all versions of the artifact.</p>
            <p><strong>Configuration: </strong> The set of specifi c versions of each artifact from which a given version of the complete product is built.</p>
            <p><strong>Configuration-control tool:</strong> can handle problems caused by development and maintenance by teams, in particular, when more than one person attempts to change the same artifact.</p>
            <p><strong>Baseline:</strong> a confi guration of all the artifacts in the product. After each group of changes has been made to the artifacts, a new baseline is attained.</p>
            <p><strong>Build tool:</strong> a tool that assists in selecting the correct version of each compiled-code artifact to be linked to from a specific version of the product</p>

            <h2>10.10 Testing Terminology</h2>

            <p>A <strong>fault</strong> is injected into a software product when a human makes a <strong>mistake</strong>. A <strong>failure</strong> is the observed incorrect behavior of the software product as a consequence of a fault, and the <strong>error</strong> is the amount by which a result is incorrect. The word <strong>defect</strong> is a generic term for a fault, failure, or error. The <strong>quality</strong> of software is the extent to which the product satisfies its specifications. Within a software organization, the primary task of the <strong>software quality assurance (SQA)</strong> group is to test that the developers’ product is correct.</p>

            <h2>10.11 Execution-Based and Non-Execution-Based Testing</h2>

            <p>There are two basic forms of testing: execution-based testing (running test cases), and nonexecution-based testing (carefully reading through an artifact). In a <strong>review</strong> (a less formal <strong>walkthrough</strong> or a more formal <strong>inspection</strong>), a team of software professionals with a broad range of skills painstakingly checks through a document, such as a specification document, a design document, or a code artifact.</p>

            <h2>10.12 Modularity</h2>

            <p><strong>Coupling:</strong> degree of interaction between two modules</p>
            <p><strong>Data Coupling:</strong> every argument is either a simple argument or a data structure for which all elements are used by the called module</p>
            <p><strong>Cohesion:</strong> we want the <em>cohesion</em> (degree of interaction within a module) to be as high as possible</p>
            <p><strong>Information Hiding: </strong>we wish to maximize <em>information hiding</em>, that is, ensuring that implementation details are not visible outside the module in which they are declared</p>

            <h2>10.13 Reuse</h2>

            <p><strong>Reuse:</strong> using components of one product to facilitate the development of a different product with a different functionality</p>

            <h2>10.14 Software Project Management Plan</h2>

            <p><strong>Software project management plan:</strong> has three main components; the work to be done, the resources with which to do it, and the money to pay for it all</p>
            <p><strong>Resources:</strong> the people who will develop the software, the hardware on which the software is run, and the support software such as operating systems, text editors, and version control software.</p>
            <p><strong>Work:</strong> The <em>work</em> to be done falls into two categories.</p>
            <p><strong>Project function:</strong> First is work that continues throughout the project and does not relate to any specific workflow of software development. Such work is termed a <em>project function</em></p>
            <p><strong>Activity:</strong> a major unit of work that has precise beginning and ending dates; consumes resources, such as computer time or person-days</p>
            <p><strong>Work products:</strong> activities result in <em>work products</em>, such as a budget, design documents, schedules, source code, or a user’s manual</p>
            <p><strong>Task:</strong> activities comprise a set of <em>tasks</em>, a task being the smallest unit of work subject to management accountability</p>
            <p><strong>Milestone:</strong> the date on which a work product is deemed completed</p>
            <p><strong>Reviews:</strong> to determine whether a work product indeed has reached a milestone, it must first pass a series of reviews performed by fellow team members, management, or the client.</p>
            <p><strong>Work package:</strong> defines not just the work product but also the staffing requirements, duration, resources, name of the responsible individual, and acceptance criteria for the work product</p>
            <p><strong>Money:</strong> a detailed budget must be worked out and the money allocated, as a function of time, to the project functions and activities</p>
            <p><strong>Cost Estimate:</strong> a key component of the plan</p>
            <p><strong>Duration Estimate:</strong> also key component of the plan</p>
            </div>
        </section>

        <section id="chpt11">
            <div class="wrap">
            <h1>Chapter 11</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </section>

        <section id="chpt12">
            <div class="wrap">
            <h1>Chapter 12</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </section>

        <section id="chpt13">
            <div class="wrap">
            <h1>Chapter 13</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </section>

        <section id="chpt14">
            <div class="wrap">
            <h1>Chapter 14</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </section>

        <section id="chpt15">
            <div class="wrap">
            <h1>Chapter 15</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </section>

        <section id="chpt16">
            <div class="wrap">
            <h1>Chapter 16</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </section>
    </body>
</html>
