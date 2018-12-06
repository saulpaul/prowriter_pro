<?php
require(__DIR__.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."head.inc.php");
?>
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="row gap-20 masonry pos-r">
                        <div class="masonry-sizer col-md-6"></div>
                        <div class="masonry-item w-100">
                            <div class="row gap-20">
                                <div class="col-md-3">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <h6 class="lh-1">Orders In Progress</h6></div>
                                        <div class="layer w-100">
                                            <div class="peers ai-sb fxw-nw">
                                                <div class="peer peer-greed" style="font-size: 30px;font-family: cabin,sans-serif;color:#0894d8;">15</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <h6 class="lh-1">Order Completed</h6></div>
                                        <div class="layer w-100">
                                            <div class="peers ai-sb fxw-nw">
                                                <div class="peer peer-greed" style="font-size: 30px;font-family: cabin,sans-serif;color:#0894d8;">400</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <h6 class="lh-1">Order Canceled</h6></div>
                                        <div class="layer w-100">
                                            <div class="peers ai-sb fxw-nw">
                                                <div class="peer peer-greed" style="font-size: 30px;font-family: cabin,sans-serif;color:#0894d8;">10</div>
                                                <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">12%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <h6 class="lh-1">Epxired Orders</h6></div>
                                        <div class="layer w-100">
                                            <div class="peers ai-sb fxw-nw">
                                                <div class="peer peer-greed" style="font-size: 30px;font-family: cabin,sans-serif;color:#0894d8;">1296</div>
                                                <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">88%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item col-md-6">
                            <div class="bgc-white p-20 bd">
                                <h2 class="c-grey-900 placers">Submit a New Order</h2>
                                <div class="mT-30">
                                    <form class="md-form">
                                       <div class="form-row">
                                       	<div class="form-group col-md-12">
                                                <label for="inputEmail4">Title Of the Order</label>
                                                <input type="Text" class="form-control" id="inputEmail4" placeholder="Order Title">
                                         </div>
                                       </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputState">Style Requested</label>
                                                <select id="inputState" class="form-control">
                                                    <option value="" disabled="disabled" selected="selected">Level</option>
													<option value="1">School</option>
													<option value="2">University</option>
													<option value="3">Doctorate</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputState">Type </label>
                                                <select id="inputState" class="form-control">
                                                    <option value="1">Essay (any type)</option>
                                                    <option value="2">Admission Essay</option>
                                                    <option value="3">Annotated Bibliography</option>           <option value="5">Article Review</option>
                                                    <option value="6">Book / Movie Review</option>           <option value="7">Business Plan</option>
                                                    <option value="8">Case Study</option>
                                                    <option value="9">Coursework</option>
                                                    <option value="10">Creative Writing</option>
                                                    <option value="11">Critical Thinking / Review</option>         <option value="19">Literature Review</option>
                                                    <option value="18">Multiple choice questions</option>           <option value="12">Presentation or Speech</option>           <option value="20">Reflective Writing</option>           <option value="21">Report</option>
                                                    <option value="13">Research Paper</option>
													<option value="14">Research Proposal</option>
                                                    <option value="15">Term Paper</option>
                                                    <option value="16">Thesis / Dissertation</option>           <option value="17">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputState">Service Required </label>
                                                <select id="inputState" class="form-control">
                                                    <option value="" disabled="disabled" selected="selected">Service</option>
                                                    <option value="1">Writing</option>
													<option value="2">Rewriting</option>
													<option value="3">Editing</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputState">Pages / Words</label>
                                                <select id="inputState" class="form-control">
                                                    <option value="" disabled="disabled" selected="selected">Pages / Words</option>
													<option value="1">1 page / 275 words</option>
													<option value="2">2 pages / 550 words</option>
													<option value="3">3 pages / 825 words</option>
													<option value="4">4 pages / 1100 words</option>
													<option value="5">5 pages / 1375 words</option>
													<option value="6">6 pages / 1650 words</option>
													<option value="7">7 pages / 1925 words</option>
													<option value="8">8 pages / 2200 words</option>
													<option value="9">9 pages / 2475 words</option>
													<option value="10">10 pages / 2750 words</option>
													<option value="11">11 pages / 3025 words</option>
													<option value="12">12 pages / 3300 words</option>
													<option value="13">13 pages / 3575 words</option>
													<option value="14">14 pages / 3850 words</option>
													<option value="15">15 pages / 4125 words</option>
													<option value="16">16 pages / 4400 words</option>
													<option value="17">17 pages / 4675 words</option>
													<option value="18">18 pages / 4950 words</option>
													<option value="19">19 pages / 5225 words</option>
													<option value="20">20 pages / 5500 words</option>
													<option value="21">21 pages / 5775 words</option>
													<option value="22">22 pages / 6050 words</option>
													<option value="23">23 pages / 6325 words</option>
													<option value="24">24 pages / 6600 words</option>
													<option value="25">25 pages / 6875 words</option>
													<option value="26">26 pages / 7150 words</option>
													<option value="27">27 pages / 7425 words</option>
													<option value="28">28 pages / 7700 words</option>
													<option value="29">29 pages / 7975 words</option>
													<option value="30">30 pages / 8250 words</option>
													<option value="31">31 pages / 8525 words</option>
													<option value="32">32 pages / 8800 words</option>
													<option value="33">33 pages / 9075 words</option>
													<option value="34">34 pages / 9350 words</option>
													<option value="35">35 pages / 9625 words</option>
													<option value="36">36 pages / 9900 words</option>
													<option value="37">37 pages / 10175 words</option>
													<option value="38">38 pages / 10450 words</option>
													<option value="39">39 pages / 10725 words</option>
													<option value="40">40 pages / 11000 words</option>
													<option value="41">41 pages / 11275 words</option>
													<option value="42">42 pages / 11550 words</option>
													<option value="43">43 pages / 11825 words</option>
													<option value="44">44 pages / 12100 words</option>
													<option value="45">45 pages / 12375 words</option>
													<option value="46">46 pages / 12650 words</option>
													<option value="47">47 pages / 12925 words</option>
													<option value="48">48 pages / 13200 words</option>
													<option value="49">49 pages / 13475 words</option>
													<option value="50">50 pages / 13750 words</option>
													<option value="51">51 pages / 14025 words</option>
													<option value="52">52 pages / 14300 words</option>
													<option value="53">53 pages / 14575 words</option>
													<option value="54">54 pages / 14850 words</option>
													<option value="55">55 pages / 15125 words</option>
													<option value="56">56 pages / 15400 words</option>
													<option value="57">57 pages / 15675 words</option>
													<option value="58">58 pages / 15950 words</option>
													<option value="59">59 pages / 16225 words</option>
													<option value="60">60 pages / 16500 words</option>
													<option value="61">61 pages / 16775 words</option>
													<option value="62">62 pages / 17050 words</option>
													<option value="63">63 pages / 17325 words</option>
													<option value="64">64 pages / 17600 words</option>
													<option value="65">65 pages / 17875 words</option>
													<option value="66">66 pages / 18150 words</option>
													<option value="67">67 pages / 18425 words</option>
													<option value="68">68 pages / 18700 words</option>
													<option value="69">69 pages / 18975 words</option>
													<option value="70">70 pages / 19250 words</option>
													<option value="71">71 pages / 19525 words</option>
													<option value="72">72 pages / 19800 words</option>
													<option value="73">73 pages / 20075 words</option>
													<option value="74">74 pages / 20350 words</option>
													<option value="75">75 pages / 20625 words</option>
													<option value="76">76 pages / 20900 words</option>
													<option value="77">77 pages / 21175 words</option>
													<option value="78">78 pages / 21450 words</option>
													<option value="79">79 pages / 21725 words</option>
													<option value="80">80 pages / 22000 words</option>
													<option value="81">81 pages / 22275 words</option>
													<option value="82">82 pages / 22550 words</option>
													<option value="83">83 pages / 22825 words</option>
													<option value="84">84 pages / 23100 words</option>
													<option value="85">85 pages / 23375 words</option>
													<option value="86">86 pages / 23650 words</option>
													<option value="87">87 pages / 23925 words</option>
													<option value="88">88 pages / 24200 words</option>
													<option value="89">89 pages / 24475 words</option>
													<option value="90">90 pages / 24750 words</option>
													<option value="91">91 pages / 25025 words</option>
													<option value="92">92 pages / 25300 words</option>
													<option value="93">93 pages / 25575 words</option>
													<option value="94">94 pages / 25850 words</option>
													<option value="95">95 pages / 26125 words</option>
													<option value="96">96 pages / 26400 words</option>
													<option value="97">97 pages / 26675 words</option>
													<option value="98">98 pages / 26950 words</option>
													<option value="99">99 pages / 27225 words</option>
													<option value="100">100 pages / 27500 words</option>
													<option value="101">101 pages / 27775 words</option>
													<option value="102">102 pages / 28050 words</option>
													<option value="103">103 pages / 28325 words</option>
													<option value="104">104 pages / 28600 words</option>
													<option value="105">105 pages / 28875 words</option>
													<option value="106">106 pages / 29150 words</option>
													<option value="107">107 pages / 29425 words</option>
													<option value="108">108 pages / 29700 words</option>
													<option value="109">109 pages / 29975 words</option>
													<option value="110">110 pages / 30250 words</option>
													<option value="111">111 pages / 30525 words</option>
													<option value="112">112 pages / 30800 words</option>
													<option value="113">113 pages / 31075 words</option>
													<option value="114">114 pages / 31350 words</option>
													<option value="115">115 pages / 31625 words</option>
													<option value="116">116 pages / 31900 words</option>
													<option value="117">117 pages / 32175 words</option>
													<option value="118">118 pages / 32450 words</option>
													<option value="119">119 pages / 32725 words</option>
													<option value="120">120 pages / 33000 words</option>
													<option value="121">121 pages / 33275 words</option>
													<option value="122">122 pages / 33550 words</option>
													<option value="123">123 pages / 33825 words</option>
													<option value="124">124 pages / 34100 words</option>
													<option value="125">125 pages / 34375 words</option>
													<option value="126">126 pages / 34650 words</option>
													<option value="127">127 pages / 34925 words</option>
													<option value="128">128 pages / 35200 words</option>
													<option value="129">129 pages / 35475 words</option>
													<option value="130">130 pages / 35750 words</option>
													<option value="131">131 pages / 36025 words</option>
													<option value="132">132 pages / 36300 words</option>
													<option value="133">133 pages / 36575 words</option>
													<option value="134">134 pages / 36850 words</option>
													<option value="135">135 pages / 37125 words</option>
													<option value="136">136 pages / 37400 words</option>
													<option value="137">137 pages / 37675 words</option>
													<option value="138">138 pages / 37950 words</option>
													<option value="139">139 pages / 38225 words</option>
													<option value="140">140 pages / 38500 words</option>
													<option value="141">141 pages / 38775 words</option>
													<option value="142">142 pages / 39050 words</option>
													<option value="143">143 pages / 39325 words</option>
													<option value="144">144 pages / 39600 words</option>
													<option value="145">145 pages / 39875 words</option>
													<option value="146">146 pages / 40150 words</option>
													<option value="147">147 pages / 40425 words</option>
													<option value="148">148 pages / 40700 words</option>
													<option value="149">149 pages / 40975 words</option>
													<option value="150">150 pages / 41250 words</option>
													<option value="151">151 pages / 41525 words</option>
													<option value="152">152 pages / 41800 words</option>
													<option value="153">153 pages / 42075 words</option>
													<option value="154">154 pages / 42350 words</option>
													<option value="155">155 pages / 42625 words</option>
													<option value="156">156 pages / 42900 words</option>
													<option value="157">157 pages / 43175 words</option>
													<option value="158">158 pages / 43450 words</option>
													<option value="159">159 pages / 43725 words</option>
													<option value="160">160 pages / 44000 words</option>
													<option value="161">161 pages / 44275 words</option>
													<option value="162">162 pages / 44550 words</option>
													<option value="163">163 pages / 44825 words</option>
													<option value="164">164 pages / 45100 words</option>
													<option value="165">165 pages / 45375 words</option>
													<option value="166">166 pages / 45650 words</option>
													<option value="167">167 pages / 45925 words</option>
													<option value="168">168 pages / 46200 words</option>
													<option value="169">169 pages / 46475 words</option>
													<option value="170">170 pages / 46750 words</option>
													<option value="171">171 pages / 47025 words</option>
													<option value="172">172 pages / 47300 words</option>
													<option value="173">173 pages / 47575 words</option>
													<option value="174">174 pages / 47850 words</option>
													<option value="175">175 pages / 48125 words</option>
													<option value="176">176 pages / 48400 words</option>
													<option value="177">177 pages / 48675 words</option>
													<option value="178">178 pages / 48950 words</option>
													<option value="179">179 pages / 49225 words</option>
													<option value="180">180 pages / 49500 words</option>
													<option value="181">181 pages / 49775 words</option>
													<option value="182">182 pages / 50050 words</option>
													<option value="183">183 pages / 50325 words</option>
													<option value="184">184 pages / 50600 words</option>
													<option value="185">185 pages / 50875 words</option>
													<option value="186">186 pages / 51150 words</option>
													<option value="187">187 pages / 51425 words</option>
													<option value="188">188 pages / 51700 words</option>
													<option value="189">189 pages / 51975 words</option>
													<option value="190">190 pages / 52250 words</option>
													<option value="191">191 pages / 52525 words</option>
													<option value="192">192 pages / 52800 words</option>
													<option value="193">193 pages / 53075 words</option>
													<option value="194">194 pages / 53350 words</option>
													<option value="195">195 pages / 53625 words</option>
													<option value="196">196 pages / 53900 words</option>
													<option value="197">197 pages / 54175 words</option>
													<option value="198">198 pages / 54450 words</option>
													<option value="199">199 pages / 54725 words</option>
													<option value="200">200 pages / 55000 words</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="form-row">
                                        	<div class="form-group col-md-6">
                                                <label for="inputState">Number Of Sources </label>
                                                <select id="inputState" class="form-control">
                                                    <option value="" disabled="disabled" selected="selected">Sources</option>
													<option value="0">0 sources</option>
													<option value="1">1 source</option>
													<option value="2">2 sources</option>
													<option value="3">3 sources</option>
													<option value="4">4 sources</option>
													<option value="5">5 sources</option>
													<option value="6">6 sources</option>
													<option value="7">7 sources</option>
													<option value="8">8 sources</option>
													<option value="9">9 sources</option>
													<option value="10">10 sources</option>
													<option value="11">11 sources</option>
													<option value="12">12 sources</option>
													<option value="13">13 sources</option>
													<option value="14">14 sources</option>
													<option value="15">15 sources</option>
													<option value="16">16 sources</option>
													<option value="17">17 sources</option>
													<option value="18">18 sources</option>
													<option value="19">19 sources</option>
													<option value="20">20 sources</option>
													<option value="21">21 sources</option>
													<option value="22">22 sources</option>
													<option value="23">23 sources</option>
													<option value="24">24 sources</option>
													<option value="25">25 sources</option>
													<option value="26">26 sources</option>
													<option value="27">27 sources</option>
													<option value="28">28 sources</option>
													<option value="29">29 sources</option>
													<option value="30">30 sources</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputState">Style Requested</label>
                                                <select id="inputState" class="form-control">
                                                    <option value="" disabled="disabled" selected="selected">Style</option>
													<option value="1">MLA</option>
													<option value="2">APA</option>
													<option value="3">Chicago/Turabian</option>
													<option value="4">Not Applicable</option>
													<option value="6">Harvard</option>
													<option value="5">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                        	<div class="form-group col-md-6">
                                                <label for="inputState">Subject</label>
                                                <select id="inputState" class="form-control">
                                                    <option value="" disabled="disabled" selected="selected">Subject</option>
													<option value="20">Accounting</option>
													<option value="14">Advertising</option>
													<option value="81">Aeronautics</option>
													<option value="38">African-American Studies</option>
													<option value="68">Agricultural Studies</option>
													<option value="61">Alternative Medicine</option>
													<option value="39">American History</option>
													<option value="52">American Literature</option>
													<option value="69">Anthropology</option>
													<option value="53">Antique Literature</option>
													<option value="30">Application Essay</option>
													<option value="2">Architecture</option>
													<option value="1">Art</option>
													<option value="54">Asian Literature</option>
													<option value="40">Asian Studies</option>
													<option value="70">Astronomy</option>
													<option value="82">Aviation</option>
													<option value="10">Biology</option>
													<option value="11">Business</option>
													<option value="41">Canadian Studies</option>
													<option value="21">Case Study</option>
													<option value="12">Chemistry</option>
													<option value="15">Communication Strategies</option>
													<option value="13">Communications and Media</option>
													<option value="22">Company Analysis</option>
													<option value="83">Computer Science</option>
													<option value="18">Creative Writing</option>
													<option value="48">Criminology</option>
													<option value="3">Dance</option>
													<option value="4">Design Analysis</option>
													<option value="5">Drama</option>
													<option value="23">E-Commerce</option>
													<option value="42">East European Studies</option>
													<option value="19">Economics</option>
													<option value="29">Education</option>
													<option value="31">Education Theories</option>
													<option value="34">Engineering</option>
													<option value="35">English</option>
													<option value="55">English Literature</option>
													<option value="71">Environmental Issues</option>
													<option value="36">Ethics</option>
													<option value="24">Finance</option>
													<option value="72">Geography</option>
													<option value="73">Geology</option>
													<option value="62">Healthcare</option>
													<option value="37">History</option>
													<option value="43">Holocaust</option>
													<option value="25">International Affairs/Relations</option>
													<option value="84">Internet</option>
													<option value="26">Investment</option>
													<option value="85">IT Management</option>
													<option value="16">Journalism</option>
													<option value="44">Latin-American Studies</option>
													<option value="47">Law</option>
													<option value="49">Legal Issues</option>
													<option value="50">Linguistics</option>
													<option value="51">Literature</option>
													<option value="27">Logistics</option>
													<option value="57">Management</option>
													<option value="58">Marketing</option>
													<option value="59">Mathematics</option>
													<option value="60">Medicine and Health</option>
													<option value="6">Movies</option>
													<option value="7">Music</option>
													<option value="45">Native-American Studies</option>
													<option value="67">Nature</option>
													<option value="63">Nursing</option>
													<option value="64">Nutrition</option>
													<option value="8">Painting</option>
													<option value="32">Pedagogy</option>
													<option value="65">Pharmacology</option>
													<option value="74">Philosophy</option>
													<option value="75">Physics</option>
													<option value="76">Political Science</option>
													<option value="77">Psychology</option>
													<option value="17">Public Relations</option>
													<option value="78">Religion and Theology</option>
													<option value="56">Shakespeare Studies</option>
													<option value="79">Sociology</option>
													<option value="66">Sport</option>
													<option value="33">Teacher's Career</option>
													<option value="80">Technology</option>
													<option value="9">Theatre</option>
													<option value="87">Tourism</option>
													<option value="28">Trade</option>
													<option value="86">Web design</option>
													<option value="46">West European Studies</option>
													<option value="88">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Deadline For the task</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="date/Month/Year">
                                            </div>
<!--                                            <div class="form-row">-->
                                            	<div class="col-md-12">
													<div class="input-group input-file" name="files">
														<span class="input-group-btn">
															<button class="btn btn-default btn-choose" type="button">Choose</button>
														</span>
														<input type="text" multiple class="form-control" placeholder='Choose a file...' />
														<span class="input-group-btn">
															 <button class="btn btn-danger btn-reset" type="button">Reset</button>
														</span>
													</div>
                                            	</div>
<!--                                            </div>-->
                                        </div>
                                        <br>
                                        <div class="form-row">
											<div class="form-group col-md-12">
												<label for="textArea">Precise Description.</label>
												<textarea class="form-control" id="textArea" rows="5" placeholder="Small Description"></textarea>
											 </div>
                                       	</div>
                                        <button type="submit" class="btn btn-primary">Submit Order</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item col-md-6">
                            
                        </div>
                        <div class="masonry-item col-md-6">
                            <div class="bd bgc-white">
                                <div class="layers">
                                    <div class="layer w-100 p-20">
                                        <h6 class="lh-1">This Month Order Reports</h6></div>
                                    <div class="layer w-100">
                                        <div class="bgc-light-blue-500 c-white p-20">
                                            <div class="peers ai-c jc-sb gap-40">
                                                <div class="peer peer-greed">
                                                    <h5>November 2017</h5>
                                                    <p class="mB-0">Order Report</p>
                                                </div>
                                                <div class="peer">
                                                    <h3 class="text-right">$8,961.54</h3></div>
                                            </div>
                                        </div>
                                        <div class="table-responsive p-20">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="bdwT-0">Order Name</th>
                                                        <th class="bdwT-0">Status</th>
                                                        <th class="bdwT-0">Date</th>
                                                        <th class="bdwT-0">Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="fw-600">#27367</td>
                                                        <td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c badge-pill">In progress</span></td>
                                                        <td>Nov 18</td>
                                                        <td><span class="text-success">$145</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-600">#23838</td>
                                                        <td><span class="badge bgc-pink-50 c-pink-700 p-10 lh-0 tt-c badge-pill">In progress</span></td>
                                                        <td>Nov 19</td>
                                                        <td><span class="text-info">$134</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-600">#fh8374</td>
                                                        <td><span class="badge bgc-pink-50 c-pink-700 p-10 lh-0 tt-c badge-pill">In progress</span></td>
                                                        <td>Nov 20</td>
                                                        <td><span class="text-danger">$155</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-600">#i878458</td>
                                                        <td><span class="badge bgc-green-50 c-green-700 p-10 lh-0 tt-c badge-pill">Completed</span></td>
                                                        <td>Nov 21</td>
                                                        <td><span class="text-success">$65</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-600">#6535465</td>
                                                        <td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c badge-pill">Canceled</span></td>
                                                        <td>Nov 22</td>
                                                        <td><span class="text-success">$78</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-600">#65366</td>
                                                        <td><span class="badge bgc-green-50 c-green-700 p-10 lh-0 tt-c badge-pill">Completed</span></td>
                                                        <td>Nov 23</td>
                                                        <td><span class="text-danger">$88</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-600">#334u45</td>
                                                        <td><span class="badge bgc-pink-50 c-pink-700 p-10 lh-0 tt-c badge-pill">In progress</span></td>
                                                        <td>Nov 22</td>
                                                        <td><span class="text-success">$56</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="ta-c bdT w-100 p-20"><a href="#">Check all the sales</a></div>
                            </div>
                        </div>
						<!--                        -->
                        <div class="masonry-item col-md-6">
                            
                        </div>
						<!--                        -->
                        <div class="masonry-item col-md-6">
                            
                        </div>
						<!--                        -->
                    </div>
                </div>
            </main>

<?php
	require(__DIR__.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."footer.inc.php");
?>