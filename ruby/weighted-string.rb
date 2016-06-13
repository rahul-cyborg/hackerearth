
def split_word(s, weight, val)
  count = 0
  (0...s.length).each do |i|
    sum = weight[s[i]]
    count += 1 if sum == val
    #break if sum > val
    ((i+1)...s.length).each do |j|
      sum += weight[s[j]]
      count += 1 if sum == val
      break if sum > val
    end
  end
  count
end

weight = Hash.new

weight['a']=1
weight['b']=2
weight['c']=3
weight['d']=4
weight['e']=5
weight['f']=6
weight['g']=7
weight['h']=8
weight['i']=9
weight['j']=10
weight['k']=11
weight['l']=12
weight['m']=13
weight['n']=14
weight['o']=15
weight['p']=16
weight['q']=17
weight['r']=18
weight['s']=19
weight['t']=20
weight['u']=21
weight['v']=22
weight['w']=23
weight['x']=24
weight['y']=25
weight['z']=26

test_cases = gets.chomp.strip.to_i

input = []

test_cases.times do
  val = gets.chomp.strip.to_i
  str = gets.chomp.strip
  input << [val,str]
end

out = []

input.each do |arr|
  count = 0
  val = arr[0]
  str = arr[1]
  tmp = split_word(str, weight, val)
  out << tmp
end

puts out